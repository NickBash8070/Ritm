/* Localize labels created by Webflow after its components initialize. */
(() => {
  const initSiteIntro = () => {
    const root = document.documentElement;
    if (!root.classList.contains('site-intro-active')) return;
    const preloader = document.querySelector('.site-preloader');
    const phone = document.querySelector('.hero-mockup');
    const finish = () => {
      root.classList.remove('site-intro-active', 'site-intro-reveal');
      preloader?.remove();
    };
    if (window.scrollY > 80 || !preloader || !phone) {
      finish();
      return;
    }
    const minimumDisplay = new Promise(resolve => window.setTimeout(resolve, 2050));
    const phoneReady = new Promise(resolve => {
      if (phone.complete) { resolve(); return; }
      phone.addEventListener('load', resolve, { once:true });
      phone.addEventListener('error', resolve, { once:true });
      window.setTimeout(resolve, 2500);
    });
    Promise.all([minimumDisplay, phoneReady]).then(() => {
      if (!root.classList.contains('site-intro-active')) return;
      requestAnimationFrame(() => root.classList.add('site-intro-reveal'));
      window.setTimeout(finish, 3450);
    });
  };
  const initBackToTop = () => {
    const link = document.querySelector('.footer-back-to-top');
    if (!link) return;
    link.addEventListener('click', event => {
      event.preventDefault();
      const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
      window.scrollTo({top:0, behavior:reducedMotion ? 'auto' : 'smooth'});
    });
  };
  const initHeroWaves = () => {
    const hero = document.querySelector('.hero-section');
    const field = document.querySelector('.hero-background');
    if (!hero || !field || window.matchMedia('(max-width: 767px), (prefers-reduced-motion: reduce)').matches) return;
    const canvas = document.createElement('canvas');
    canvas.className = 'hero-wave-canvas';
    canvas.setAttribute('aria-hidden', 'true');
    field.appendChild(canvas);
    const ctx = canvas.getContext('2d');
    let width=0, height=0, dpr=1;
    let resize = () => {
      const rect = field.getBoundingClientRect(); width=rect.width; height=rect.height;
      dpr=Math.min(window.devicePixelRatio||1,2); canvas.width=Math.round(width*dpr); canvas.height=Math.round(height*dpr);
      ctx.setTransform(dpr,0,0,dpr,0,0);
    };
    
    resize();
    const draw = (now=performance.now()) => {
      ctx.clearRect(0,0,width,height);
      const cx=width*.5, cy=height*.28, time=now*.00018;
      ctx.lineCap='round';
      // Stacked luminous loops echo the supplied reference video.
      for(let i=0;i<9;i++) {
        const y=cy+(i-4)*78+Math.sin(time*1.7+i*.55)*8;
        const rx=Math.min(width*.42, 300+i*32)+Math.sin(time+i)*10;
        const ry=40+Math.sin(time*1.3+i*.7)*4;
        const color=i%3===0?'#e7cbfe':'#84f4dc';
        ctx.beginPath(); ctx.ellipse(cx,y,rx,ry,0,0,Math.PI*2);
        ctx.strokeStyle=color; ctx.globalAlpha=.16; ctx.lineWidth=28; ctx.shadowColor=color; ctx.shadowBlur=42; ctx.stroke();
        ctx.beginPath(); ctx.ellipse(cx,y,rx,ry,0,0,Math.PI*2);
        ctx.globalAlpha=.5; ctx.lineWidth=7; ctx.shadowBlur=20; ctx.stroke();
      }
      ctx.shadowBlur=0; ctx.globalAlpha=1;
      requestAnimationFrame(draw);
    };
    window.addEventListener('resize', () => resize(), {passive:true});
    resize(); requestAnimationFrame(draw);
  };
  const localize = () => {
    document.documentElement.lang = 'ru';
    document.title = 'Ритм — сила внутри';
    const labels = {
      home: 'Главная', menu: 'Меню',
      'previous slide': 'Предыдущий отзыв', 'next slide': 'Следующий отзыв',
      'close lightbox': 'Закрыть видео', 'open lightbox': 'Открыть видео',
      'previous image': 'Предыдущее изображение', 'next image': 'Следующее изображение'
    };
    document.querySelectorAll('[aria-label]').forEach(element => {
      const label = element.getAttribute('aria-label');
      if (labels[label]) element.setAttribute('aria-label', labels[label]);
      else if (/^\d+ of \d+$/.test(label)) element.setAttribute('aria-label', label.replace(' of ', ' из '));
      else if (/^Show slide \d+ of \d+$/.test(label)) element.setAttribute('aria-label', label.replace('Show slide ', 'Показать отзыв ').replace(' of ', ' из '));
    });
    document.querySelectorAll('.w-slider-aria-label').forEach(element => {
      element.textContent = element.textContent.replace('Slide ', 'Отзыв ').replace(' of ', ' из ').replace('.', '');
    });
    document.querySelectorAll('.w-slider').forEach(element => element.setAttribute('aria-roledescription', 'карусель'));
    document.querySelectorAll('.w-slide').forEach(element => element.setAttribute('aria-roledescription', 'слайд'));
  };
  const initHeroScroll = () => {
    const hero = document.querySelector('.hero-section');
    if (!hero) return;
    let frame = 0;
    let currentProgress = 0;
    let targetProgress = 0;
    let lastFrameTime = 0;
    const update = (now = performance.now()) => {
      frame = 0;
      const elapsed = lastFrameTime ? Math.min(64, now - lastFrameTime) : 16.67;
      lastFrameTime = now;
      const smoothing = 1 - Math.exp(-elapsed / 240);
      currentProgress += (targetProgress - currentProgress) * smoothing;
      if (Math.abs(targetProgress - currentProgress) < 0.001) currentProgress = targetProgress;
      const progress = currentProgress;
      const rect = hero.getBoundingClientRect();
      hero.style.setProperty('--hero-darken', String((progress * 0.5).toFixed(3)));
      // Hold the image in place while the foreground exits downward and fades.
      const exit = progress;
      hero.style.setProperty('--hero-bg-y', `${(exit * 120).toFixed(2)}px`);
      hero.style.setProperty('--hero-bg-opacity', String((1 - exit).toFixed(3)));
      const wrap = hero.querySelector('.hero-wrapper');
      if (wrap) {
        wrap.style.setProperty('--hero-exit-y', `${(exit * 380).toFixed(2)}px`);
        wrap.style.setProperty('--hero-foreground-opacity', String((1 - exit * 0.92).toFixed(3)));
        wrap.style.setProperty('--hero-title-scale', (1 + exit * 0.36).toFixed(3));
      }
      if (Math.abs(currentProgress - targetProgress) > 0.001) frame = requestAnimationFrame(update);
    };
    const onScroll = () => {
      const rect = hero.getBoundingClientRect();
      targetProgress = Math.max(0, Math.min(1, -rect.top / Math.max(1, rect.height * 0.72)));
      if (!frame) frame = requestAnimationFrame(update);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', onScroll, { passive: true });
    onScroll();
    const wrap = hero.querySelector('.hero-wrapper');
    if (wrap && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      let raf = 0, tx = 0, ty = 0, currentX = 0, currentY = 0, lastPointerFrame = 0;
      const move = (event) => {
        tx = (event.clientX / Math.max(1, window.innerWidth) - .5) * 46;
        ty = (event.clientY / Math.max(1, window.innerHeight) - .5) * 30;
        if (!raf) {
          const tick = (now) => {
            const elapsed = lastPointerFrame ? Math.min(64, now - lastPointerFrame) : 16.67;
            lastPointerFrame = now;
            const smoothing = 1 - Math.exp(-elapsed / 200);
            currentX += (tx - currentX) * smoothing;
            currentY += (ty - currentY) * smoothing;
            wrap.style.setProperty('--parallax-x', currentX.toFixed(2) + 'px');
            wrap.style.setProperty('--parallax-y', currentY.toFixed(2) + 'px');
            if (Math.abs(tx-currentX) > .1 || Math.abs(ty-currentY) > .1) raf = requestAnimationFrame(tick); else raf = 0;
          };
          raf = requestAnimationFrame(tick);
        }
      };
      window.addEventListener('pointermove', move, { passive: true });
    }
  };
  const initSmartNavbar = () => {
    const nav = document.querySelector('.navbar-component');
    if (!nav) return;
    let lastY = window.scrollY;
    const updateNav = () => {
      const y = window.scrollY;
      if (y <= 8 || nav.querySelector('.w-nav-button.w--open')) {
        nav.classList.remove('nav-scrolled-up', 'nav-scrolled-down');
      } else if (y < lastY - 1) {
        nav.classList.add('nav-scrolled-up');
        nav.classList.remove('nav-scrolled-down');
      } else if (y > lastY + 1) {
        nav.classList.add('nav-scrolled-down');
        nav.classList.remove('nav-scrolled-up');
      }
      lastY = y;
    };
    window.addEventListener('scroll', updateNav, { passive:true });
    updateNav();
  };
  const initMobileMenuMotion = () => {
    const nav = document.querySelector('.navbar-component');
    const button = nav?.querySelector('.home-01-navbar-menu-button');
    const overlay = nav?.querySelector('.w-nav-overlay');
    const menu = nav?.querySelector('.home-01-nav-menu');
    if (!button || !overlay || !menu) return;

    let wasOpen = button.classList.contains('w--open');
    let closeTimer = 0;
    const clearCloseState = () => {
      window.clearTimeout(closeTimer);
      overlay.classList.remove('is-closing');
      menu.classList.remove('is-closing');
    };
    const watchOpenState = () => {
      const isOpen = button.classList.contains('w--open');
      if (isOpen) {
        clearCloseState();
      } else if (wasOpen) {
        overlay.classList.add('is-closing');
        menu.classList.add('is-closing');
        const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        closeTimer = window.setTimeout(clearCloseState, reducedMotion ? 0 : 620);
      }
      wasOpen = isOpen;
    };
    new MutationObserver(watchOpenState).observe(button, {
      attributes:true,
      attributeFilter:['class']
    });
  };
  const initCtaBackground = () => {
    const cta = document.querySelector('.cta-section');
    if (!cta) return;
    const footer = document.querySelector('.footer-section');
    const faq = document.querySelector('#faq');
    const canvas = document.createElement('canvas');
    canvas.className = 'cta-section-background-canvas';
    canvas.setAttribute('aria-hidden', 'true');
    document.body.insertBefore(canvas, document.body.firstChild);
    // Ease the brand wave field in while the FAQ moves out of view and toward the CTA.
    const getStrength = () => {
      if (faq) {
        const faqRect = faq.getBoundingClientRect();
        return Math.max(0, Math.min(1, (window.innerHeight - faqRect.bottom) / (window.innerHeight * 1.05)));
      }
      const rect = cta.getBoundingClientRect();
      const progress = Math.max(0, Math.min(1, (window.innerHeight - rect.top) / Math.max(1, rect.height)));
      return Math.max(0, Math.min(1, (progress - .02) / .7));
    };
    const easeStrength = (value) => value * value * (3 - 2 * value);
    const useCssFallback = () => {
      canvas.classList.add('is-css-fallback');
      const updateFallback = () => {
        canvas.style.setProperty('--cta-bg-opacity', easeStrength(getStrength()).toFixed(3));
      };
      let fallbackFrame = 0;
      const onFallbackScroll = () => {
        if (fallbackFrame) return;
        fallbackFrame = requestAnimationFrame(() => {
          fallbackFrame = 0;
          updateFallback();
        });
      };
      window.addEventListener('scroll', onFallbackScroll, { passive:true });
      window.addEventListener('resize', onFallbackScroll, { passive:true });
      if ('IntersectionObserver' in window) {
        let ctaVisible = false;
        let footerVisible = false;
        const observer = new IntersectionObserver((entries) => {
          entries.forEach((entry) => {
            if (entry.target === cta) ctaVisible = entry.isIntersecting;
            if (entry.target === footer) footerVisible = entry.isIntersecting;
          });
          canvas.classList.toggle('is-active', ctaVisible || footerVisible);
        }, { rootMargin:'160px 0px' });
        observer.observe(cta);
        if (footer) observer.observe(footer);
      } else {
        canvas.classList.add('is-active');
      }
      updateFallback();
    };
    const gl = canvas.getContext('webgl', { alpha:true, antialias:false, premultipliedAlpha:false });
    if (!gl) {
      useCssFallback();
      return;
    }

    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const vertexSource = `
      attribute vec2 a_position;
      varying vec2 v_uv;
      void main() {
        v_uv = a_position * 0.5 + 0.5;
        gl_Position = vec4(a_position, 0.0, 1.0);
      }
    `;
    const fragmentSource = `
      precision highp float;
      varying vec2 v_uv;
      uniform vec2 u_resolution;
      uniform float u_time;
      uniform float u_strength;

      void main() {
        vec2 uv = v_uv;
        uv.x *= u_resolution.x / max(u_resolution.y, 1.0);
        float t = u_time * 3.0;
        float phase = uv.x * 4.6 - t * 0.18 + 0.15;
        float waveY = 0.5
          + 0.19 * sin(phase + 0.045 * sin(t * 0.17))
          + 0.055 * sin(phase * 0.5 + 2.5 - t * 0.06)
          + 0.035 * sin(phase * 1.55 - t * 0.11)
          + 0.018 * sin(phase * 2.25 + t * 0.075);
        float distanceToWave = abs(uv.y - waveY);
        float glow = exp(-distanceToWave * distanceToWave * 0.75);
        float haze = exp(-distanceToWave * distanceToWave * 3.0);
        float core = exp(-distanceToWave * distanceToWave * 13.125);
        float x = clamp(uv.x / max(u_resolution.x / max(u_resolution.y, 1.0), 1.0), 0.0, 1.0);
        vec3 mint = vec3(0.518, 0.957, 0.863);
        vec3 lavender = vec3(0.76, 0.61, 1.0);
        vec3 waveColor = mix(mint, lavender, smoothstep(0.08, 0.58, x));
        waveColor = mix(waveColor, mint, smoothstep(0.68, 1.0, x) * 0.82);
        vec3 color = waveColor * (glow * 0.035 + haze * 0.16 + core * 0.7);
        float alpha = glow * 0.035 + haze * 0.16 + core * 0.46;
        float veil = smoothstep(0.0, 1.0, u_strength);
        gl_FragColor = vec4(color, alpha * veil * 0.82);
      }
    `;
    const compile = (type, source) => {
      const shader = gl.createShader(type);
      if (!shader) return null;
      gl.shaderSource(shader, source);
      gl.compileShader(shader);
      if (!gl.getShaderParameter(shader, gl.COMPILE_STATUS)) {
        gl.deleteShader(shader);
        return null;
      }
      return shader;
    };
    const vertexShader = compile(gl.VERTEX_SHADER, vertexSource);
    const fragmentShader = compile(gl.FRAGMENT_SHADER, fragmentSource);
    const program = vertexShader && fragmentShader ? gl.createProgram() : null;
    if (!program) {
      useCssFallback();
      return;
    }
    gl.attachShader(program, vertexShader);
    gl.attachShader(program, fragmentShader);
    gl.linkProgram(program);
    gl.deleteShader(vertexShader);
    gl.deleteShader(fragmentShader);
    if (!gl.getProgramParameter(program, gl.LINK_STATUS)) {
      useCssFallback();
      return;
    }
    const positionBuffer = gl.createBuffer();
    gl.bindBuffer(gl.ARRAY_BUFFER, positionBuffer);
    gl.bufferData(gl.ARRAY_BUFFER, new Float32Array([-1, -1, 1, -1, -1, 1, 1, 1]), gl.STATIC_DRAW);
    gl.useProgram(program);
    const position = gl.getAttribLocation(program, 'a_position');
    gl.enableVertexAttribArray(position);
    gl.vertexAttribPointer(position, 2, gl.FLOAT, false, 0, 0);
    const resolutionUniform = gl.getUniformLocation(program, 'u_resolution');
    const timeUniform = gl.getUniformLocation(program, 'u_time');
    const strengthUniform = gl.getUniformLocation(program, 'u_strength');
    gl.enable(gl.BLEND);
    gl.blendFunc(gl.SRC_ALPHA, gl.ONE_MINUS_SRC_ALPHA);

    let width = 0;
    let height = 0;
    let strength = 0;
    let scrollFrame = 0;
    let drawFrame = 0;
    let lastDraw = 0;
    let isVisible = false;
    let pixelRatio = 1;

    const resize = () => {
      width = window.innerWidth;
      height = window.innerHeight;
      pixelRatio = Math.min(window.devicePixelRatio || 1, 1.25);
      canvas.width = Math.round(width * pixelRatio);
      canvas.height = Math.round(height * pixelRatio);
      gl.viewport(0, 0, canvas.width, canvas.height);
      gl.uniform2f(resolutionUniform, width, height);
      draw(performance.now());
    };

    const update = () => {
      scrollFrame = 0;
      strength = getStrength();
      canvas.style.setProperty('--cta-bg-opacity', easeStrength(strength).toFixed(3));
      if (reduceMotion) draw(performance.now() * 0.2);
    };

    const draw = (now) => {
      if (!width || !height) return;
      gl.clearColor(0, 0, 0, 0);
      gl.clear(gl.COLOR_BUFFER_BIT);
      if (strength <= .001 || !width || !height) return;
      gl.uniform1f(timeUniform, now * (reduceMotion ? 0.0002 : 0.001));
      gl.uniform1f(strengthUniform, strength);
      gl.drawArrays(gl.TRIANGLE_STRIP, 0, 4);
    };

    const tick = (now) => {
      drawFrame = 0;
      if (!isVisible) return;
      const frameInterval = reduceMotion ? 1000 / 12 : 1000 / 30;
      if (now - lastDraw >= frameInterval) {
        draw(now * (reduceMotion ? 0.2 : 1));
        lastDraw = now;
      }
      drawFrame = requestAnimationFrame(tick);
    };
    const start = () => {
      if (isVisible && !drawFrame) drawFrame = requestAnimationFrame(tick);
    };
    const onScroll = () => {
      if (!scrollFrame) scrollFrame = requestAnimationFrame(update);
    };

    resize();
    window.addEventListener('scroll', onScroll, { passive:true });
    window.addEventListener('resize', () => { resize(); onScroll(); }, { passive:true });
    if ('ResizeObserver' in window) new ResizeObserver(resize).observe(cta);
    if ('IntersectionObserver' in window) {
      let ctaVisible = false;
      let footerVisible = false;
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.target === cta) ctaVisible = entry.isIntersecting;
          if (entry.target === footer) footerVisible = entry.isIntersecting;
        });
        isVisible = ctaVisible || footerVisible;
        if (isVisible) start();
        else if (drawFrame) {
          cancelAnimationFrame(drawFrame);
          drawFrame = 0;
        }
      }, { rootMargin:'160px 0px' });
      observer.observe(cta);
      if (footer) observer.observe(footer);
    } else {
      isVisible = true;
      start();
    }
    update();
  };
  const initPlatformIcons = () => {
    document.querySelectorAll('a[href*="play.google"], a[href*="apple.com"]').forEach((button) => {
      const label = (button.textContent || '').toLowerCase();
      if (!/(android|андроид|ios|айфон)/.test(label)) return;
      button.classList.add('platform-download-button');
      const platformLabel = button.href.includes('play.google') ? 'Скачать для Android' : 'Скачать для iOS';
      button.querySelectorAll('.button-text').forEach((text) => { text.textContent = platformLabel; });
      if (button.querySelector('.download-platform-icon')) return;
      const icon = document.createElement('span');
      icon.className = 'download-platform-icon';
      icon.setAttribute('aria-hidden', 'true');
      if (button.href.includes('play.google')) {
        icon.innerHTML = '<svg viewBox="0 0 24 24"><path d="M7.5 9.2h9A1.5 1.5 0 0 1 18 10.7v6.1a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 6 16.8v-6.1A1.5 1.5 0 0 1 7.5 9.2Z" fill="currentColor"/><path d="M8.4 8.5a3.7 3.7 0 0 1 7.2 0M8.5 5.8 7.2 4.2M15.5 5.8l1.3-1.6M5 11.5v5M19 11.5v5" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" fill="none"/><circle cx="9.7" cy="11.6" r=".7" fill="#0D0D0D"/><circle cx="14.3" cy="11.6" r=".7" fill="#0D0D0D"/></svg>';
      } else if (button.href.includes('apple.com')) {
        icon.innerHTML = '<svg viewBox="0 0 24 24"><path d="M16.9 12.7c0-2 1.6-3 1.7-3.1a3.7 3.7 0 0 0-2.9-1.6c-1.2-.1-2.4.7-3 .7s-1.6-.7-2.7-.7a4.1 4.1 0 0 0-3.5 2.1c-1.5 2.6-.4 6.4 1.1 8.5.7 1 1.6 2.2 2.7 2.1 1.1 0 1.5-.7 2.8-.7s1.6.7 2.8.7c1.2 0 1.9-1 2.6-2 .8-1.1 1.1-2.2 1.1-2.3-.1 0-2.7-1.1-2.7-3.7ZM15 6.8c.6-.8 1-1.8.9-2.8-.9 0-2 .6-2.6 1.3-.6.7-1 1.7-.9 2.7 1 .1 2-.5 2.6-1.2Z" fill="currentColor"/></svg>';
      }
      button.prepend(icon);
    });
  };
  const initPricingCounters = () => {
    const amounts = Array.from(document.querySelectorAll('.pricing-section .plan-amount'));
    if (!amounts.length || window.matchMedia('(prefers-reduced-motion: reduce)').matches || !('IntersectionObserver' in window)) return;

    const format = value => String(value).replace(/\B(?=(\d{3})+(?!\d))/g, '\u00a0');
    const animate = amount => {
      const valueNode = Array.from(amount.childNodes).find(node => node.nodeType === Node.TEXT_NODE && /\d/.test(node.nodeValue || ''));
      if (!valueNode) return;
      const original = valueNode.nodeValue;
      const target = Number(original.replace(/\D/g, ''));
      if (!target) return;
      const trailingSpace = original.match(/\s*$/u)?.[0] || '';
      const duration = 1500;
      let startTime;

      const tick = now => {
        if (startTime === undefined) startTime = now;
        const progress = Math.min(1, (now - startTime) / duration);
        const eased = 1 - Math.pow(1 - progress, 3);
        valueNode.nodeValue = `${format(Math.round(target * eased))}${trailingSpace}`;
        if (progress < 1) requestAnimationFrame(tick);
        else valueNode.nodeValue = original;
      };

      valueNode.nodeValue = `0${trailingSpace}`;
      requestAnimationFrame(tick);
    };

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        observer.unobserve(entry.target);
        animate(entry.target);
      });
    }, { threshold:0.35 });
    amounts.forEach(amount => observer.observe(amount));
  };
  const initOnboardingIcons = () => {
    const iconFiles = ['camera.svg', 'community.svg', 'profile.svg', 'target.svg'];
    document.querySelectorAll('.how-it-work-icon').forEach((container, index) => {
      const file = iconFiles[index];
      if (!file) return;
      const image = document.createElement('img');
      image.src = `/images/new/icon/${file}`;
      image.alt = '';
      image.width = 25;
      image.height = 25;
      image.setAttribute('aria-hidden', 'true');
      container.replaceChildren(image);
    });
  };
  const initFaqIcons = () => {
    document.querySelectorAll('.faq-icon').forEach((container) => {
      const image = document.createElement('img');
      image.src = '/images/new/icon/help.svg';
      image.alt = '';
      image.width = 25;
      image.height = 25;
      image.setAttribute('aria-hidden', 'true');
      container.replaceChildren(image);
    });
  };
  const initOnboardingScreens = () => {
    const screenFiles = ['4564556.png', '4565.png', '456.png', '56456.png'];
    const screenAlt = [
      'Экран выбора роста в приложении «Ритм»',
      'Экран выбора пола в приложении «Ритм»',
      'Экран выбора веса в приложении «Ритм»',
      'Экран выбора возраста в приложении «Ритм»'
    ];
    document.querySelectorAll('#process .how-it-works-tab-image').forEach((container, index) => {
      const file = screenFiles[index];
      if (!file) return;
      const image = document.createElement('img');
      image.className = 'onboarding-screen-image';
      image.src = encodeURI(`/images/new/Новая папка/${file}`);
      image.alt = screenAlt[index] || '';
      image.loading = 'lazy';
      image.decoding = 'async';
      container.replaceChildren(image);
    });
  };
  const initDownloadBannerReveal = () => {
    const banner = document.querySelector('.download-banner');
    if (!banner) return;
    banner.classList.add('download-banner-reveal');
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      banner.classList.add('is-visible');
      return;
    }
    const observer = new IntersectionObserver((entries) => {
      if (!entries.some((entry) => entry.isIntersecting)) return;
      banner.classList.add('is-visible');
      observer.disconnect();
    }, { threshold:0.18, rootMargin:'0px 0px -8% 0px' });
    observer.observe(banner);
  };
  const initRhythmProgressChart = () => {
    const charts = Array.from(document.querySelectorAll('[data-rhythm-progress-chart]'));
    if (!charts.length) return;
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches || !('IntersectionObserver' in window)) {
      charts.forEach((chart) => chart.classList.add('is-visible'));
      return;
    }
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      });
    }, { threshold:0.2, rootMargin:'0px 0px -6% 0px' });
    charts.forEach((chart) => {
      chart.classList.add('is-animated');
      observer.observe(chart);
    });
  };
  const initFitjourneyCardReveal = () => {
    const cards = Array.from(document.querySelectorAll('.fitjourney-section .fitjourney-grid > .fitjourney-card-wrapper'));
    if (!cards.length) return;

    cards.forEach((card, index) => {
      card.style.setProperty('--journey-reveal-delay', `${(index % 3) * 100}ms`);
      card.classList.add('journey-card-reveal-ready');
    });

    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches || !('IntersectionObserver' in window)) {
      cards.forEach((card) => card.classList.add('is-revealed'));
      return;
    }

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('is-revealed');
        observer.unobserve(entry.target);
      });
    }, { threshold:0.12, rootMargin:'0px 0px -8% 0px' });

    cards.forEach((card) => observer.observe(card));
  };
  const initCtaSequence = () => {
    const cta = document.querySelector('.cta-section');
    if (!cta) return;
    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
    if (reducedMotion.matches) {
      cta.classList.add('is-marquee-visible');
      return;
    }
    let frame = 0;
    let velocityFrame = 0;
    let lastScrollY = window.scrollY;
    let lastScrollTime = performance.now();
    let lastVelocityFrameTime = lastScrollTime;
    let scrollVelocity = 0;
    let renderedSkew = 0;
    const clamp = (value, min, max) => Math.min(max, Math.max(min, value));
    const update = () => {
      frame = 0;
      const rect = cta.getBoundingClientRect();
      const progress = Math.max(0, Math.min(1, (window.innerHeight - rect.top) / Math.max(1, rect.height)));
      cta.classList.toggle('is-marquee-visible', progress >= .85);
    };
    const animateVelocity = (now) => {
      velocityFrame = 0;
      const elapsed = Math.min(48, Math.max(0, now - lastVelocityFrameTime));
      lastVelocityFrameTime = now;
      scrollVelocity *= Math.exp(-elapsed / 150);
      const targetSkew = -clamp(scrollVelocity / 4, -1, 1) * 2.4;
      renderedSkew += (targetSkew - renderedSkew) * (1 - Math.exp(-elapsed / 68));

      if (cta.classList.contains('is-marquee-visible')) {
        cta.style.setProperty('--cta-scroll-skew', `${renderedSkew.toFixed(2)}deg`);
      }

      if (Math.abs(scrollVelocity) > .012 || Math.abs(renderedSkew) > .05) {
        velocityFrame = requestAnimationFrame(animateVelocity);
      } else {
        renderedSkew = 0;
        cta.style.setProperty('--cta-scroll-skew', '0deg');
      }
    };
    const scheduleUpdate = () => { if (!frame) frame = requestAnimationFrame(update); };
    const onScroll = () => {
      const now = performance.now();
      const nextScrollY = window.scrollY;
      const elapsed = Math.max(16, now - lastScrollTime);
      const delta = nextScrollY - lastScrollY;
      if (delta) {
        scrollVelocity = delta / elapsed;
        if (!velocityFrame) velocityFrame = requestAnimationFrame(animateVelocity);
      }
      lastScrollY = nextScrollY;
      lastScrollTime = now;
      scheduleUpdate();
    };
    window.addEventListener('scroll', onScroll, { passive:true });
    window.addEventListener('resize', scheduleUpdate, { passive:true });
    update();
  };
  const initTestimonialLoop = () => {
    const slider = document.querySelector('.testimonial-slider');
    if (!slider || slider.dataset.coverflowReady === 'true') return;
    const mask = slider.querySelector('.w-slider-mask');
    const slides = Array.from(mask?.querySelectorAll('.w-slide') || []);
    const previous = slider.querySelector('.w-slider-arrow-left');
    const next = slider.querySelector('.w-slider-arrow-right');
    const count = slides.length;
    if (!mask || !count) return;

    slider.dataset.coverflowReady = 'true';
    slider.classList.add('is-coverflow');
    mask.tabIndex = 0;
    mask.setAttribute('role', 'region');
    mask.setAttribute('aria-roledescription', 'карусель');
    mask.setAttribute('aria-label', 'Отзывы пользователей');
    previous?.setAttribute('aria-label', 'Предыдущий отзыв');
    next?.setAttribute('aria-label', 'Следующий отзыв');

    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
    let position = 0;
    let target = 0;
    let width = 0;
    let frame = 0;
    let selected = -1;
    let blockClickUntil = 0;
    let drag = null;

    const indexAt = (value) => ((Math.round(value) % count) + count) % count;
    const foldedOffset = (index, value) => {
      let offset = index - value;
      offset = ((offset % count) + count) % count;
      if (offset > count / 2) offset -= count;
      return offset;
    };
    const updateSelected = () => {
      const nextSelected = indexAt(position);
      if (nextSelected === selected) return;
      selected = nextSelected;
      slides.forEach((slide, index) => {
        const active = index === selected;
        slide.classList.toggle('is-coverflow-active', active);
        slide.setAttribute('aria-hidden', active ? 'false' : 'true');
        slide.setAttribute('aria-label', `${index + 1} из ${count}`);
      });
      slider.style.setProperty('--coverflow-current', `"${String(selected + 1).padStart(2, '0')}"`);
      slider.dispatchEvent(new CustomEvent('coverflowchange', { detail:{ index:selected } }));
    };
    const paint = () => {
      if (!width) return;
      const singleCard = window.matchMedia('(max-width:1199px)').matches;
      const pitch = width * (singleCard ? 1 : .86);
      slides.forEach((slide, index) => {
        const offset = foldedOffset(index, position);
        const distance = Math.abs(offset);
        const ramp = Math.pow(distance, .56);
        const tilt = Math.min(44 * ramp, 80) * Math.sign(offset);
        const depth = -width * .58 * ramp;
        const edge = Math.min(1, Math.max(0, count / 2 - distance));
        const active = index === indexAt(position);
        const visible = singleCard ? active : edge > .01;
        slide.style.transform = singleCard
          ? 'translateX(-50%) translateZ(0) rotateY(0deg)'
          : `translateX(calc(-50% + ${offset * pitch}px)) translateZ(${depth}px) rotateY(${-tilt}deg)`;
        slide.style.opacity = visible ? '1' : '0';
        slide.style.zIndex = singleCard ? (active ? '100' : '0') : String(100 - Math.round(distance * 10));
        slide.style.visibility = visible ? 'visible' : 'hidden';
      });
      updateSelected();
    };
    const settle = (nextTarget) => {
      if (frame) cancelAnimationFrame(frame);
      target = nextTarget;
      if (reducedMotion.matches) {
        position = target;
        paint();
        frame = 0;
        return;
      }
      const step = () => {
        const remaining = target - position;
        if (Math.abs(remaining) < .0004) {
          position = target;
          paint();
          frame = 0;
          return;
        }
        position += remaining * .16;
        paint();
        frame = requestAnimationFrame(step);
      };
      frame = requestAnimationFrame(step);
    };
    const nudge = (by) => settle(Math.round(target) + by);
    const goTo = (index) => {
      const nearest = index + Math.round((target - index) / count) * count;
      settle(nearest);
    };
    const interceptArrow = (by) => (event) => {
      event.preventDefault();
      event.stopImmediatePropagation();
      nudge(by);
    };
    previous?.addEventListener('click', interceptArrow(-1), true);
    next?.addEventListener('click', interceptArrow(1), true);

    mask.addEventListener('keydown', (event) => {
      if (event.key === 'ArrowLeft') {
        event.preventDefault();
        nudge(-1);
      } else if (event.key === 'ArrowRight') {
        event.preventDefault();
        nudge(1);
      }
    });
    mask.addEventListener('pointerdown', (event) => {
      if (frame) cancelAnimationFrame(frame);
      frame = 0;
      target = position;
      mask.classList.remove('is-dragging');
      mask.setPointerCapture?.(event.pointerId);
      drag = {
        id:event.pointerId,
        x:event.clientX,
        start:position,
        previous:position,
        time:performance.now(),
        velocity:0,
        moved:false
      };
    });
    mask.addEventListener('pointermove', (event) => {
      if (!drag || drag.id !== event.pointerId || !width) return;
      const now = performance.now();
      const pitch = width * (window.matchMedia('(max-width:1199px)').matches ? 1 : .86);
      const nextPosition = drag.start - (event.clientX - drag.x) / pitch;
      drag.velocity = ((nextPosition - drag.previous) / Math.max(1, now - drag.time)) * 1000;
      drag.previous = nextPosition;
      drag.time = now;
      drag.moved ||= Math.abs(event.clientX - drag.x) > 5;
      if (drag.moved) {
        mask.classList.add('is-dragging');
        event.preventDefault();
      }
      position = nextPosition;
      target = position;
      paint();
    });
    const endDrag = (event) => {
      if (!drag || drag.id !== event.pointerId) return;
      if (drag.moved) blockClickUntil = performance.now() + 260;
      mask.classList.remove('is-dragging');
      const carried = Math.max(-2, Math.min(2, drag.velocity * .18));
      drag = null;
      settle(Math.round(position + carried));
    };
    mask.addEventListener('pointerup', endDrag);
    mask.addEventListener('pointercancel', endDrag);
    slides.forEach((slide, index) => {
      slide.addEventListener('click', () => {
        if (performance.now() < blockClickUntil || index === selected) return;
        goTo(index);
      });
    });

    const measure = () => {
      width = slides[0].offsetWidth;
      paint();
    };
    const observer = new ResizeObserver(measure);
    observer.observe(mask);
    window.addEventListener('resize', measure, {passive:true});
    requestAnimationFrame(measure);
  };
  const initFeatureMobileCarousel = () => {
    const wrapper = document.querySelector('.feature-content-wrapper');
    const track = wrapper?.querySelector('.feature-content-holder');
    const controls = wrapper?.querySelector('.feature-mobile-controls');
    const slides = Array.from(track?.querySelectorAll('.feature-content-card') || []);
    const dots = Array.from(controls?.querySelectorAll('.feature-mobile-dot') || []);
    const previous = controls?.querySelector('.feature-mobile-prev');
    const next = controls?.querySelector('.feature-mobile-next');
    if (!wrapper || !track || !controls || slides.length !== 4) return;

    let activeIndex = 0;
    let frame = 0;
    let touchStart = null;
    const setActive = (index) => {
      activeIndex = Math.max(0, Math.min(slides.length - 1, index));
      dots.forEach((dot, dotIndex) => {
        const active = dotIndex === activeIndex;
        dot.classList.toggle('is-active', active);
        dot.setAttribute('aria-selected', String(active));
      });
      if (previous) previous.disabled = activeIndex === 0;
      if (next) next.disabled = activeIndex === slides.length - 1;
    };
    const goTo = (index) => {
      const slide = slides[Math.max(0, Math.min(slides.length - 1, index))];
      if (!slide) return;
      const left = slide.getBoundingClientRect().left - slides[0].getBoundingClientRect().left;
      const behavior = window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 'auto' : 'smooth';
      if (typeof track.scrollTo === 'function') track.scrollTo({left, behavior});
      else track.scrollLeft = left;
    };
    const updateActive = () => {
      frame = 0;
      const trackCenter = track.getBoundingClientRect().left + track.clientWidth / 2;
      let nearest = 0;
      let nearestDistance = Infinity;
      slides.forEach((slide, index) => {
        const rect = slide.getBoundingClientRect();
        const distance = Math.abs(rect.left + rect.width / 2 - trackCenter);
        if (distance < nearestDistance) { nearest = index; nearestDistance = distance; }
      });
      setActive(nearest);
    };
    const scheduleUpdate = () => {
      if (frame) return;
      frame = requestAnimationFrame(updateActive);
    };
    previous?.addEventListener('click', () => goTo(activeIndex - 1));
    next?.addEventListener('click', () => goTo(activeIndex + 1));
    dots.forEach((dot, index) => dot.addEventListener('click', () => goTo(index)));
    track.addEventListener('touchstart', (event) => {
      if (event.touches.length !== 1) {
        touchStart = null;
        return;
      }
      const touch = event.touches[0];
      touchStart = { x:touch.clientX, y:touch.clientY, index:activeIndex };
    }, {passive:true});
    track.addEventListener('touchend', (event) => {
      if (!touchStart) return;
      const start = touchStart;
      touchStart = null;
      const touch = event.changedTouches[0];
      if (!touch) return;
      const deltaX = touch.clientX - start.x;
      const deltaY = touch.clientY - start.y;
      if (Math.abs(deltaX) < 36 || Math.abs(deltaX) <= Math.abs(deltaY) * 1.15) return;
      goTo(start.index + (deltaX < 0 ? 1 : -1));
    }, {passive:true});
    track.addEventListener('touchcancel', () => { touchStart = null; }, {passive:true});
    track.addEventListener('scroll', scheduleUpdate, {passive:true});
    window.addEventListener('resize', scheduleUpdate, {passive:true});
    if (typeof ResizeObserver === 'function') new ResizeObserver(scheduleUpdate).observe(track);
    setActive(0);
    requestAnimationFrame(updateActive);
  };
  const initFeatureContentFade = () => {
    const wrapper = document.querySelector('.feature-content-wrapper');
    const holder = wrapper?.querySelector('.feature-content-holder');
    const firstCard = holder?.querySelector('.feature-content-card');
    if (!wrapper || !holder || !firstCard || window.matchMedia('(max-width: 991px)').matches) return;
    let frame = 0;
    const update = () => {
      frame = 0;
      const width = firstCard.getBoundingClientRect().width;
      if (!width) return;
      const transform = getComputedStyle(holder).transform;
      const match = transform.match(/matrix\([^,]+,[^,]+,[^,]+,[^,]+,\s*(-?[\d.]+)/);
      const offset = match ? Math.abs(Number(match[1])) : 0;
      const phase = (offset % width) / width;
      const distanceFromSnap = Math.min(phase, 1 - phase);
      wrapper.classList.toggle('feature-content-transitioning', distanceFromSnap > .025);
    };
    const schedule = () => {
      if (frame) return;
      frame = requestAnimationFrame(() => requestAnimationFrame(update));
    };
    window.addEventListener('scroll', schedule, { passive:true });
    window.addEventListener('resize', schedule, { passive:true });
    new MutationObserver(schedule).observe(holder, { attributes:true, attributeFilter:['style'] });
    schedule();
  };
  initBackToTop();
  window.Webflow = window.Webflow || [];
  window.Webflow.push(() => {
    localize();
    initHeroScroll();
    initSmartNavbar();
    initMobileMenuMotion();
    initPlatformIcons();
    initPricingCounters();
    initOnboardingIcons();
    initFaqIcons();
    initOnboardingScreens();
    initDownloadBannerReveal();
    initRhythmProgressChart();
    initFitjourneyCardReveal();
    initCtaBackground();
    initCtaSequence();
    initTestimonialLoop();
    initFeatureMobileCarousel();
    initFeatureContentFade();
    const title = document.querySelector('.hero-title-wrapper');
    if (title && !document.documentElement.classList.contains('site-intro-active')) title.classList.add('hero-title-drop');
    const slider = document.querySelector('.w-slider-mask');
    if (slider) new MutationObserver(localize).observe(slider, {attributes:true,subtree:true,attributeFilter:['aria-label']});
  });
  initSiteIntro();
})();
