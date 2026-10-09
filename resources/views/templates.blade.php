<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Your Style | Creatique</title>
    <style>
        :root{--violet-atelier:#b78aff;--violet-atelier-tech-noir:#8050c8;--ink:#f5f2fc;--muted:#b7b2c7;--line:#343044;--surface:#15131e;--page:#08090f}
        *{box-sizing:border-box}
        html{scroll-behavior:smooth}
        body{margin:0;font-family:Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif;color:var(--ink);background:radial-gradient(ellipse at 8% 0%,rgba(109,40,217,.22) 0,transparent 32%),radial-gradient(ellipse at 100% 18%,rgba(76,29,149,.18) 0,transparent 27%),radial-gradient(ellipse at 50% 100%,rgba(49,22,92,.2) 0,transparent 40%),var(--page);min-height:100vh}
        a{color:inherit;text-decoration:none}
        .navbar{height:76px;padding:0 clamp(20px,6vw,88px);display:flex;align-items:center;justify-content:space-between;background:rgba(8,7,19,.88);border-bottom:1px solid rgba(167,139,250,.2);backdrop-filter:blur(18px);position:sticky;top:0;z-index:5}
        .brand{font-size:1.42rem;font-weight:800;letter-spacing:-.55px;color:#f4efff}.brand span{color:#a78bfa}
        .nav-right{display:flex;align-items:center;gap:14px}.nav-link{font-size:.92rem;font-weight:700;color:#c9c0e5;padding:11px 15px;border-radius:12px}.nav-link:hover{background:#211638;color:#d8b4fe}
        .wrap{width:min(1160px,calc(100% - 40px));margin:auto;padding:62px 0 76px}
        .hero{text-align:center;max-width:760px;margin:0 auto 38px}.eyebrow{display:inline-flex;align-items:center;gap:8px;padding:8px 13px;border:1px solid #49316c;border-radius:999px;background:rgba(31,20,53,.86);color:#d8b4fe;font-size:.75rem;font-weight:850;letter-spacing:1.5px}.sparkle{font-size:1rem;color:#c084fc}.hero h1{font-size:clamp(2.2rem,5vw,3.65rem);line-height:1.07;letter-spacing:-2px;margin:19px 0 15px;color:#f8f5ff}.hero h1 span{color:#b794ff}.hero p{margin:0 auto;color:var(--muted);font-size:1.05rem;line-height:1.75;max-width:620px}
        .quick-info{display:flex;justify-content:center;flex-wrap:wrap;gap:10px;margin-top:22px}.quick-info span{display:inline-flex;align-items:center;gap:7px;background:rgba(22,16,39,.85);border:1px solid #302246;border-radius:999px;padding:9px 13px;color:#c5badf;font-size:.82rem;font-weight:650}
        .grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:24px}
        .card{background:linear-gradient(145deg,rgba(23,17,42,.98),rgba(12,10,25,.98));border:1px solid #302348;border-radius:20px;overflow:hidden;box-shadow:0 18px 48px rgba(0,0,0,.32);transition:transform .22s ease,box-shadow .22s ease,border-color .22s ease;min-width:0}.card:hover{transform:translateY(-5px);box-shadow:0 22px 52px rgba(0,0,0,.4),0 0 24px rgba(139,92,246,.1);border-color:#7544b8}
        .preview{height:255px;padding:18px;background:#100b20;position:relative;overflow:hidden}.browser{height:100%;border-radius:13px;background:#100d1c;box-shadow:0 7px 24px rgba(0,0,0,.35);overflow:hidden;border:1px solid rgba(167,139,250,.2)}.browser-top{height:25px;display:flex;align-items:center;gap:5px;padding:0 10px;background:rgba(15,11,27,.95);border-bottom:1px solid rgba(167,139,250,.15)}.dot{height:6px;width:6px;border-radius:50%;background:#665779}.mock-content{height:calc(100% - 25px);padding:18px 22px;display:grid;grid-template-columns:1fr .7fr;gap:14px;align-items:center}.mock-tag{font-size:7px;font-weight:800;letter-spacing:1.4px;margin-bottom:8px;opacity:.78}.mock-name{font-size:clamp(15px,2vw,23px);line-height:1.05;font-weight:850;letter-spacing:-.8px;margin-bottom:8px}.mock-sub{font-size:8px;line-height:1.5;opacity:.78;max-width:185px}.mock-lines{display:flex;gap:5px;margin-top:12px;flex-wrap:wrap}.mock-pill{height:14px;min-width:36px;border-radius:99px;background:rgba(167,139,250,.2)}.mock-button{display:inline-block;margin-top:12px;border-radius:5px;padding:6px 10px;font-size:7px;font-weight:800}.mock-photo{width:min(100%,118px);aspect-ratio:4/5;border-radius:15px;margin:auto;display:flex;align-items:center;justify-content:center;font-size:45px;box-shadow:0 9px 22px rgba(0,0,0,.28)}.mock-section{display:flex;gap:5px;margin-top:14px}.mock-section i{display:block;height:30px;border-radius:5px;flex:1;background:rgba(167,139,250,.14)}
        .violet-atelier-preview{background:radial-gradient(circle at 0% 0%,#48206f,transparent 48%),linear-gradient(135deg,#10091f,#1a1030 55%,#100b20)}.violet-atelier-preview .browser{background:#100b1c}.violet-atelier-preview .mock-content{color:#f4eaff}.violet-atelier-preview .mock-photo{background:linear-gradient(150deg,#6d28d9,#30204f);color:#e9d5ff}.violet-atelier-preview .mock-pill,.violet-atelier-preview .mock-section i{background:#302044}.violet-atelier-preview .mock-button{background:#7c3aed;color:white}
        .tech-noir-preview{background:radial-gradient(circle at 100% 0%,#163a43,transparent 42%),linear-gradient(135deg,#05070e,#101021)}.tech-noir-preview .browser{background:#090c14;border-color:#283347}.tech-noir-preview .browser-top{background:#090c14;border-color:#263144}.tech-noir-preview .dot{background:#536276}.tech-noir-preview .mock-content{color:#f1f5f9}.tech-noir-preview .mock-photo{background:linear-gradient(145deg,#263452,#0e4f54);color:#b9fff0}.tech-noir-preview .mock-pill,.tech-noir-preview .mock-section i{background:#1c2a39}.tech-noir-preview .mock-button{background:#2dd4bf;color:#062a2a}
        .executive-onyx-preview{background:radial-gradient(circle at 100% 0%,#5b3a1d,transparent 45%),linear-gradient(135deg,#17110c,#2a1c11)}.executive-onyx-preview .browser{background:#19120d;border-color:#584128}.executive-onyx-preview .browser-top{background:#19120d;border-color:#44311d}.executive-onyx-preview .mock-content{color:#fff1d3}.executive-onyx-preview .mock-photo{background:linear-gradient(145deg,#8b642c,#3f2a17);color:#ffe2a0}.executive-onyx-preview .mock-pill,.executive-onyx-preview .mock-section i{background:#44301b}.executive-onyx-preview .mock-button{background:#b8893e;color:#160e06}
        .creative-spectrum-preview{background:radial-gradient(circle at 0% 100%,#4b1d63,transparent 45%),radial-gradient(circle at 100% 0%,#124c5c,transparent 42%),linear-gradient(135deg,#0b1021,#1b1030)}.creative-spectrum-preview .browser{background:#0c1020;border-color:#343052}.creative-spectrum-preview .browser-top{background:#0c1020;border-color:#302744}.creative-spectrum-preview .mock-content{color:#f5edff}.creative-spectrum-preview .mock-photo{background:linear-gradient(145deg,#23616c,#5540a2 55%,#793b68);color:#ffe4f4}.creative-spectrum-preview .mock-pill,.creative-spectrum-preview .mock-section i{background:linear-gradient(90deg,#27334d,#382447)}.creative-spectrum-preview .mock-button{background:linear-gradient(100deg,#7654e8,#168ba0);color:white}
        .card-body{padding:21px 23px 23px}.card-heading{display:flex;align-items:center;justify-content:space-between;gap:12px}.card h2{font-size:1.18rem;letter-spacing:-.3px;margin:0;color:#f3edff}.tag{white-space:nowrap;padding:6px 9px;border-radius:999px;background:#2b1d43;color:#d8b4fe;font-size:.69rem;font-weight:850}.card p{font-size:.9rem;line-height:1.65;color:#b4a9ca;margin:10px 0 19px;min-height:47px}.card-bottom{display:flex;align-items:center;justify-content:space-between;gap:10px}.palette{display:flex;align-items:center;padding-left:3px}.swatch{height:18px;width:18px;border-radius:50%;border:2px solid #1b142b;margin-left:-3px;box-shadow:0 0 0 1px rgba(255,255,255,.12)}.choose{display:inline-flex;align-items:center;justify-content:center;gap:9px;background:#7c3aed;color:#fff;border-radius:12px;padding:11px 14px;font-size:.84rem;font-weight:800;transition:background .2s,transform .2s}.choose:hover{background:#6d28d9;transform:translateY(-1px)}.tech-noir-card .choose{background:#0f766e}.executive-onyx-card .choose{background:#9a6b2f}.creative-spectrum-card .choose{background:linear-gradient(100deg,#7545d8,#167f91)}
        .bottom-note{margin-top:29px;border:1px solid #302348;background:rgba(18,13,32,.88);padding:16px 19px;border-radius:15px;display:flex;align-items:center;justify-content:center;gap:10px;text-align:center;color:#b7acca;font-size:.88rem;line-height:1.5}.bottom-note strong{color:#e0caff}
        footer{padding:22px 20px;text-align:center;color:#8d83a6;font-size:.8rem;border-top:1px solid rgba(167,139,250,.17);background:rgba(8,7,19,.72)}

        /* Make the four previews structurally distinct, not just recolored. */
        .violet-atelier-preview .browser{border:0;border-radius:2px;box-shadow:none;background:#100b1c;position:relative}
        .violet-atelier-preview .browser-top{display:none}
        .violet-atelier-preview .mock-content{height:100%;padding:25px 28px;grid-template-columns:1.2fr .65fr;gap:22px}
        .violet-atelier-preview .mock-name{font-family:Georgia,'Times New Roman',serif;font-size:clamp(18px,2.2vw,27px);letter-spacing:-1px;max-width:190px}
        .violet-atelier-preview .mock-photo{border-radius:3px 3px 34px 3px;aspect-ratio:3/4;width:min(100%,108px)}
        .violet-atelier-preview .mock-section i{height:2px;border-radius:0}
        .tech-noir-preview .browser{border-radius:5px;position:relative}
        .tech-noir-preview .browser-top{height:22px}
        .tech-noir-preview .mock-content{grid-template-columns:1fr .65fr;padding:18px 24px}
        .tech-noir-preview .mock-tag{font-family:ui-monospace,monospace;letter-spacing:1.7px}
        .tech-noir-preview .mock-name{font-family:ui-monospace,SFMono-Regular,Menlo,monospace;letter-spacing:-1px;text-transform:uppercase}
        .tech-noir-preview .mock-photo{border-radius:14px;aspect-ratio:1;width:min(100%,108px);border:1px solid #2dd4bf}
        .tech-noir-preview .mock-pill{border-radius:3px;height:10px}
        .executive-onyx-preview .browser{border-radius:3px;border-top:3px solid #9a6b2f}
        .executive-onyx-preview .mock-content{grid-template-columns:1.15fr .6fr;padding:22px 27px}
        .executive-onyx-preview .mock-name{font-family:Georgia,'Times New Roman',serif;font-weight:500;font-size:clamp(18px,2.3vw,27px);letter-spacing:-.4px}
        .executive-onyx-preview .mock-sub{font-family:Georgia,serif;font-size:8px}
        .executive-onyx-preview .mock-photo{border-radius:2px;aspect-ratio:4/5;width:min(100%,104px);border:1px solid #b8893e}
        .executive-onyx-preview .mock-button{border-radius:2px;letter-spacing:.5px;text-transform:uppercase}
        .creative-spectrum-preview .browser{border-radius:16px;border:1px solid #6d4fc2;box-shadow:0 0 0 4px rgba(109,79,194,.12)}
        .creative-spectrum-preview .mock-content{grid-template-columns:1fr .65fr;padding:18px 22px}
        .creative-spectrum-preview .mock-name{font-size:clamp(18px,2.3vw,27px);letter-spacing:-1px}
        .creative-spectrum-preview .mock-photo{border-radius:30px 30px 8px 30px;aspect-ratio:4/5;width:min(100%,108px);transform:rotate(2deg)}
        .creative-spectrum-preview .mock-pill{border-radius:5px;transform:skewX(-12deg)}
        .card:nth-child(1){border-radius:3px 22px 22px 22px}
        .card:nth-child(2){border-radius:22px 3px 22px 22px}
        .card:nth-child(3){border-radius:3px;background:linear-gradient(145deg,#21170f,#120e0a);border-color:#584128}
        .card:nth-child(4){border-radius:26px;background:linear-gradient(145deg,#17132a,#0b1320);border-color:#40345f}

        @media(max-width:720px){.navbar{height:66px;padding:0 18px}.nav-link{font-size:.82rem;padding:9px 10px}.wrap{width:min(100% - 28px,520px);padding:42px 0 52px}.hero{margin-bottom:28px}.hero h1{letter-spacing:-1.4px}.hero p{font-size:.95rem}.grid{grid-template-columns:1fr;gap:18px}.preview{height:235px;padding:15px}.mock-content{padding:15px 18px}.card-body{padding:19px}.card p{min-height:0}.bottom-note{align-items:flex-start;text-align:left}}
        @media(prefers-reduced-motion:reduce){*{scroll-behavior:auto!important;transition:none!important}}

        /* Strong, unmistakably different thumbnail compositions for each template. */
        .preview{height:275px;padding:16px;isolation:isolate}
        .preview .browser{transition:transform .25s ease}
        .card:hover .preview .browser{transform:translateY(-2px)}
        /* Violet Atelier: editorial magazine cover */
        .violet-atelier-preview{padding:20px 24px;background:linear-gradient(115deg,#160b25 0%,#24103c 58%,#422067 100%)}
        .violet-atelier-preview .browser{border:0;box-shadow:none;border-radius:0;background:transparent;border-left:1px solid #8157a8;padding-left:14px}
        .violet-atelier-preview .browser-top{display:none}
        .violet-atelier-preview .mock-content{height:100%;padding:18px 8px;grid-template-columns:1.3fr .65fr;gap:18px}
        .violet-atelier-preview .mock-tag{letter-spacing:2px;color:#d8b4fe}
        .violet-atelier-preview .mock-name{font-family:Georgia,serif;font-size:clamp(21px,2.7vw,31px);font-weight:500;line-height:.98;max-width:150px}
        .violet-atelier-preview .mock-sub{max-width:150px}
        .violet-atelier-preview .mock-photo{width:min(100%,100px);aspect-ratio:3/4;border-radius:48% 48% 4px 4px;background:linear-gradient(150deg,#a78bfa,#3b1d59);font-size:36px}
        .violet-atelier-preview .mock-section i{height:2px;border-radius:0}
        .violet-atelier-preview .mock-pill{height:2px;min-width:30px;border-radius:0}
        .violet-atelier-preview .mock-button{background:transparent;border-bottom:1px solid #c4a2f5;border-radius:0;padding:5px 0;color:#e9d5ff}
        /* Tech Noir: developer terminal with a left rail */
        .tech-noir-preview{padding:14px;background:linear-gradient(135deg,#05080e,#10232c)}
        .tech-noir-preview .browser{border-radius:7px;border:1px solid #2dd4bf;background:#080d14;position:relative}
        .tech-noir-preview .browser:after{content:'01\A 02\A 03\A 04\A 05';white-space:pre;position:absolute;left:0;top:25px;bottom:0;width:27px;padding-top:16px;text-align:center;line-height:26px;font:8px/26px ui-monospace,monospace;color:#4e8d91;background:#0c1820;border-right:1px solid #1d4448}
        .tech-noir-preview .browser-top{height:25px;background:#080d14;border-color:#1d4448}
        .tech-noir-preview .mock-content{height:calc(100% - 25px);margin-left:27px;padding:16px 15px;grid-template-columns:1.2fr .6fr;gap:8px}
        .tech-noir-preview .mock-tag{font:700 6px ui-monospace,monospace;letter-spacing:1px;color:#5eead4}
        .tech-noir-preview .mock-name{font:800 clamp(14px,1.9vw,21px)/1.1 ui-monospace,monospace;letter-spacing:-.8px;text-transform:none}
        .tech-noir-preview .mock-photo{width:min(100%,84px);aspect-ratio:1;border-radius:12px;border:1px solid #2dd4bf;background:linear-gradient(145deg,#1c3346,#0b4a4d);font-family:monospace}
        .tech-noir-preview .mock-pill{height:8px;min-width:25px;border-radius:2px;background:#18323a}
        .tech-noir-preview .mock-section i{height:22px;border-radius:3px;background:#132a31}
        .tech-noir-preview .mock-button{background:#2dd4bf;color:#062a2a;border-radius:3px}
        /* Executive Onyx: luxury profile with gold rule and restrained geometry */
        .executive-onyx-preview{padding:17px;background:linear-gradient(135deg,#1b130c,#342313)}
        .executive-onyx-preview .browser{border:0;border-top:3px solid #b8893e;border-radius:2px;background:#19120d;box-shadow:0 10px 28px #080503}
        .executive-onyx-preview .browser-top{height:19px;background:#19120d;border-color:#44311d}
        .executive-onyx-preview .mock-content{height:calc(100% - 19px);padding:20px 23px;grid-template-columns:1.25fr .55fr;gap:18px}
        .executive-onyx-preview .mock-tag{font:700 6px Georgia,serif;letter-spacing:2px;color:#d9b875}
        .executive-onyx-preview .mock-name{font:500 clamp(20px,2.4vw,29px)/1.02 Georgia,serif;letter-spacing:-.4px}
        .executive-onyx-preview .mock-sub{font:9px/1.55 Georgia,serif;color:#d8c7a7}
        .executive-onyx-preview .mock-photo{width:min(100%,91px);aspect-ratio:4/5;border-radius:0;border:1px solid #b8893e;background:linear-gradient(145deg,#775128,#2a1b0d);font-size:34px}
        .executive-onyx-preview .mock-pill{height:2px;min-width:28px;border-radius:0;background:#79552b}
        .executive-onyx-preview .mock-section i{height:1px;border-radius:0;background:#5a4125}
        .executive-onyx-preview .mock-button{background:transparent;color:#e5c783;border:1px solid #8b672f;border-radius:0;letter-spacing:1px;text-transform:uppercase}
        /* Creative Spectrum: asymmetric art-directed studio collage */
        .creative-spectrum-preview{padding:15px;background:radial-gradient(circle at 15% 80%,#55216c,transparent 40%),radial-gradient(circle at 95% 15%,#0e6672,transparent 43%),#0b1021}
        .creative-spectrum-preview .browser{border:1px solid #6954b5;border-radius:18px;background:rgba(11,15,32,.8);box-shadow:0 0 0 5px rgba(105,84,181,.13);transform:rotate(-1deg)}
        .creative-spectrum-preview .browser-top{height:20px;background:#101329;border-color:#302744}
        .creative-spectrum-preview .mock-content{height:calc(100% - 20px);padding:14px 18px;grid-template-columns:1fr .65fr;gap:10px}
        .creative-spectrum-preview .mock-tag{color:#9eeaf0;letter-spacing:1px}
        .creative-spectrum-preview .mock-name{font-size:clamp(19px,2.5vw,29px);line-height:.98;letter-spacing:-1.3px;background:linear-gradient(90deg,#f5edff,#a5f3fc,#f0abfc);background-clip:text;-webkit-background-clip:text;color:transparent}
        .creative-spectrum-preview .mock-photo{width:min(100%,102px);aspect-ratio:4/5;border-radius:28px 28px 7px 28px;transform:rotate(5deg);border:1px solid #8a6ce4;background:linear-gradient(145deg,#23616c,#5540a2 55%,#793b68);font-size:40px}
        .creative-spectrum-preview .mock-pill{height:11px;min-width:25px;border-radius:4px;transform:skewX(-13deg);background:linear-gradient(90deg,#7654e8,#168ba0)}
        .creative-spectrum-preview .mock-section i{height:25px;border-radius:8px 2px 8px 2px;background:linear-gradient(135deg,#28324e,#392447)}
        .creative-spectrum-preview .mock-button{background:linear-gradient(100deg,#7654e8,#168ba0);color:white;border-radius:7px 2px 7px 2px}
        @media(max-width:720px){.preview{height:250px}.tech-noir-preview .mock-content{padding:12px 9px}.executive-onyx-preview .mock-content{padding:15px}}

    </style>
</head>
<body>
<header class="navbar">
    <a class="brand" href="/?page=home">Creatique<span>.</span></a>
    <div class="nav-right"><a class="nav-link" href="/?page=create">← Back to editor</a></div>
</header>
<main class="wrap">
    <section class="hero">
        <span class="eyebrow"><span class="sparkle">✦</span> PROFESSIONAL PORTFOLIO DESIGNS</span>
        <h1>Choose a template that <span>works for you.</span></h1>
        <p>Choose a polished, responsive layout built to present your profile, skills, projects, and contact details clearly.</p>
        <div class="quick-info"><span>✓ Four unique styles</span><span>▣ Mobile-friendly layouts</span><span>✦ Easy to customize</span></div>
    </section>

    <section class="grid" aria-label="Portfolio templates">
        <article class="card">
            <div class="preview violet-atelier-preview"><div class="browser"><div class="browser-top"><i class="dot"></i><i class="dot"></i><i class="dot"></i></div><div class="mock-content"><div><div class="mock-tag">HELLO, I'M</div><div class="mock-name">Your Name.</div><div class="mock-sub">Selected work, thoughtful process, and a clear point of view.</div><div class="mock-lines"><i class="mock-pill"></i><i class="mock-pill"></i><i class="mock-pill"></i></div><span class="mock-button">VIEW MY WORK ↗</span></div><div><div class="mock-photo">✿</div><div class="mock-section"><i></i><i></i><i></i></div></div></div></div></div>
            <div class="card-body"><div class="card-heading"><h2>Violet Atelier</h2><span class="tag">EDITORIAL</span></div><p>A refined editorial layout with confident typography, restrained violet accents, and generous spacing.</p><div class="card-bottom"><div class="palette" aria-label="Purple color palette"><i class="swatch" style="background:#7041c5"></i><i class="swatch" style="background:#d7c0ff"></i><i class="swatch" style="background:#f4efff"></i></div><a class="choose" href="/?page=create&amp;template=violet-atelier">Use this style <span>→</span></a></div></div>
        </article>

        <article class="card tech-noir-card">
            <div class="preview tech-noir-preview"><div class="browser"><div class="browser-top"><i class="dot"></i><i class="dot"></i><i class="dot"></i></div><div class="mock-content"><div><div class="mock-tag">AVAILABLE FOR PROJECTS</div><div class="mock-name">Engineer.<br>Build. Deliver.</div><div class="mock-sub">Developer portfolio with a bold, focused look and high-contrast details.</div><div class="mock-lines"><i class="mock-pill"></i><i class="mock-pill"></i><i class="mock-pill"></i></div><span class="mock-button">EXPLORE PROJECTS ↗</span></div><div><div class="mock-photo">⌘</div><div class="mock-section"><i></i><i></i><i></i></div></div></div></div></div>
            <div class="card-body"><div class="card-heading"><h2>Tech Noir</h2><span class="tag" style="background:#eceaf6;color:#44345f">TECHNICAL</span></div><p>A crisp developer-focused system with deep navy surfaces, cyan details, and a structured technical feel.</p><div class="card-bottom"><div class="palette" aria-label="Dark color palette"><i class="swatch" style="background:#11111b"></i><i class="swatch" style="background:#65d6c1"></i><i class="swatch" style="background:#3e3564"></i></div><a class="choose" href="/?page=create&amp;template=tech-noir">Use this style <span>→</span></a></div></div>
        </article>

        <article class="card executive-onyx-card">
            <div class="preview executive-onyx-preview"><div class="browser"><div class="browser-top"><i class="dot"></i><i class="dot"></i><i class="dot"></i></div><div class="mock-content"><div><div class="mock-tag">BUILT ON EXPERIENCE</div><div class="mock-name">A considered<br>professional profile.</div><div class="mock-sub">A premium, polished layout with champagne tones and refined details.</div><div class="mock-lines"><i class="mock-pill"></i><i class="mock-pill"></i></div><span class="mock-button">DISCOVER MY WORK ↗</span></div><div><div class="mock-photo">✧</div><div class="mock-section"><i></i><i></i><i></i></div></div></div></div></div>
            <div class="card-body"><div class="card-heading"><h2>Executive Onyx</h2><span class="tag" style="background:#f8edcf;color:#8a642c">EXECUTIVE</span></div><p>A premium dark-brown and antique-gold presentation for business, leadership, and polished personal branding.</p><div class="card-bottom"><div class="palette" aria-label="Beige color palette"><i class="swatch" style="background:#8a642c"></i><i class="swatch" style="background:#d9b875"></i><i class="swatch" style="background:#fffdf7"></i></div><a class="choose" href="/?page=create&amp;template=executive-onyx">Use this style <span>→</span></a></div></div>
        </article>

        <article class="card creative-spectrum-card">
            <div class="preview creative-spectrum-preview"><div class="browser"><div class="browser-top"><i class="dot"></i><i class="dot"></i><i class="dot"></i></div><div class="mock-content"><div><div class="mock-tag">STUDIO WORK, CLEARLY PRESENTED</div><div class="mock-name">Design with<br>intention.</div><div class="mock-sub">A dreamy blend of lavender, sky blue, and aqua for a fresh, modern portfolio.</div><div class="mock-lines"><i class="mock-pill"></i><i class="mock-pill"></i><i class="mock-pill"></i></div><span class="mock-button">SEE WHAT I CREATE ↗</span></div><div><div class="mock-photo">♡</div><div class="mock-section"><i></i><i></i><i></i></div></div></div></div></div>
            <div class="card-body"><div class="card-heading"><h2>Creative Spectrum</h2><span class="tag" style="background:#e6f4ff;color:#6354c8">STUDIO</span></div><p>A contemporary creative portfolio with midnight tones and carefully balanced violet-to-teal highlights.</p><div class="card-bottom"><div class="palette" aria-label="Aurora color palette"><i class="swatch" style="background:#6b5ce7"></i><i class="swatch" style="background:#35b9d0"></i><i class="swatch" style="background:#f1a8d4"></i></div><a class="choose" href="/?page=create&amp;template=creative-spectrum">Use this style <span>→</span></a></div></div>
        </article>
    </section>

    <div class="bottom-note"><span>💡</span><span><strong>Not sure which to choose?</strong> Start with Violet Atelier—you can always return and try another look.</span></div>
</main>
<footer>© {{ date('Y') }} Creatique · A sharper presentation for your best work.</footer>
</body>
</html>
