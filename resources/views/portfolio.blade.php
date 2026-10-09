
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creatique | Portfolio Generator</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f8f6ff;
            color: #252044;
        }

        nav {
            background: white;
            padding: 22px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
            box-shadow: 0 2px 10px #00000008;
        }

        nav h2 {
            color: #7041c5;
            margin: 0;
        }

        nav a {
            text-decoration: none;
            color: #30204d;
            margin-left: 18px;
        }

        nav a:hover {
            color: #7041c5;
        }

        .hero {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            align-items: center;
            gap: 40px;
            padding: 65px 7%;
            background: linear-gradient(120deg, #ffffff, #eee7ff);
        }

        .eyebrow {
            color: #7041c5;
            font-weight: bold;
            letter-spacing: 3px;
        }

        .hero h1 {
            font-size: clamp(38px, 5vw, 64px);
            line-height: 1.08;
            margin: 20px 0;
        }

        .highlight {
            color: #8060d5;
        }

        .hero p {
            color: #77718a;
            line-height: 1.8;
        }

        .hero-card {
            background: white;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 15px 40px #7041c520;
            text-align: center;
        }

        .avatar {
            width: 95px;
            height: 95px;
            border-radius: 50%;
            background: #7041c5;
            color: white;
            display: grid;
            place-items: center;
            font-size: 30px;
            font-weight: bold;
            margin: 20px auto;
        }

        .button {
            display: inline-block;
            border: none;
            border-radius: 9px;
            background: #7041c5;
            color: white;
            padding: 14px 22px;
            text-decoration: none;
            cursor: pointer;
            font-size: 15px;
            margin: 8px 5px 8px 0;
        }

        .button:hover {
            background: #5830a3;
        }

        .secondary {
            background: #eee7ff;
            color: #7041c5;
        }

        .container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 20px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .section-title p {
            color: #77718a;
        }

        .templates {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 15px;
        }

        .template {
            background: white;
            border: 2px solid #e7def8;
            border-radius: 12px;
            padding: 12px;
            cursor: pointer;
            text-align: center;
        }

        .template.active {
            border-color: #7041c5;
            box-shadow: 0 0 0 2px #7041c520;
        }

        .template input {
            accent-color: #7041c5;
        }

        .swatch {
            height: 85px;
            border-radius: 8px;
            margin-bottom: 12px;
        }

        .swatch-purple {
            background: linear-gradient(135deg, #eee5ff, #7041c5);
        }

        .swatch-dark {
            background: linear-gradient(135deg, #111827, #60a5fa);
        }

        .swatch-beige {
            background: linear-gradient(135deg, #fff4df, #ad8965);
        }

        .swatch-gradient {
            background: linear-gradient(135deg, #ec4899, #8b5cf6, #06b6d4);
        }

        .panel {
            background: white;
            padding: 28px;
            border-radius: 16px;
            margin-top: 30px;
            box-shadow: 0 5px 20px #30204d10;
        }

        label {
            display: block;
            font-weight: bold;
            margin: 17px 0 8px;
        }

        input, textarea {
            width: 100%;
            padding: 13px;
            border: 1px solid #d8cde9;
            border-radius: 8px;
            font: inherit;
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        .small-note {
            font-size: 13px;
            margin-top: 6px;
        }

        .hidden {
            display: none;
        }

        #preview {
            margin-top: 30px;
            padding: 35px;
            border-radius: 16px;
            overflow-wrap: anywhere;
        }

        #previewName {
            font-size: 38px;
        }

        .profile-picture {
            display: block;
            width: 130px;
            height: 130px;
            object-fit: cover;
            border-radius: 8px;
            border: 5px solid #ffffff;
            box-shadow: 0 5px 18px #30204d25;
            margin: 0 0 20px;
        }

        #profilePicturePreview {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 8px;
            display: block;
            margin: 12px 0;
            border: 4px solid #e5d9ff;
        }

        .skill {
            display: inline-block;
            padding: 8px 13px;
            border-radius: 20px;
            margin: 4px;
        }

        .project-text {
            white-space: pre-wrap;
            line-height: 1.7;
        }

        footer {
            text-align: center;
            padding: 25px;
            color: #77718a;
        }

        @media (max-width: 800px) {
            .hero {
                grid-template-columns: 1fr;
                padding: 40px 6%;
            }

            .templates {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            nav {
                padding: 20px;
            }

            nav a {
                margin-left: 8px;
            }
        }

        @media (max-width: 450px) {
            .templates {
                grid-template-columns: 1fr;
            }

            .panel {
                padding: 18px;
            }
        }
    
        /* Responsive layout improvements */
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 24px;
        }

        body {
            min-width: 320px;
            line-height: 1.6;
            transition: background 0.25s ease, color 0.25s ease;
        }

        nav {
            position: sticky;
            top: 0;
            z-index: 100;
            padding: 16px clamp(16px, 5vw, 7%);
            gap: 12px 24px;
        }

        nav > div {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px 18px;
        }

        nav a {
            display: inline-block;
            margin-left: 0;
            padding: 7px 0;
        }

        .hero {
            padding: clamp(32px, 6vw, 72px) clamp(16px, 5vw, 7%);
            gap: clamp(24px, 4vw, 48px);
        }

        .hero > div,
        .hero-card,
        .panel,
        .card,
        #preview {
            min-width: 0;
        }

        .hero-card {
            padding: clamp(20px, 4vw, 35px);
        }

        .container {
            width: min(1100px, 100%);
            margin: clamp(24px, 4vw, 42px) auto;
            padding: clamp(14px, 3vw, 22px);
        }

        .panel {
            padding: clamp(18px, 3.5vw, 30px);
        }

        input,
        textarea {
            max-width: 100%;
            min-width: 0;
        }

        .button {
            max-width: 100%;
            text-align: center;
            white-space: normal;
            line-height: 1.4;
        }

        #preview {
            padding: clamp(18px, 4vw, 36px);
        }

        #previewName {
            font-size: clamp(28px, 5vw, 42px);
            overflow-wrap: anywhere;
        }

        .templates {
            gap: 16px;
        }

        .template {
            overflow-wrap: anywhere;
        }

        footer {
            padding: 22px 16px;
        }

        @media (max-width: 900px) {
            .hero {
                grid-template-columns: minmax(0, 1fr) minmax(260px, 0.8fr);
            }

            .templates {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 700px) {
            nav {
                align-items: flex-start;
                flex-direction: column;
            }

            nav > div {
                width: 100%;
                gap: 4px 18px;
            }

            .hero {
                grid-template-columns: minmax(0, 1fr);
            }

            .hero-card {
                max-width: 520px;
                width: 100%;
                justify-self: center;
            }

            .hero h1 {
                font-size: clamp(34px, 9vw, 52px);
            }

            .templates {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 480px) {
            nav h2 {
                font-size: 23px;
            }

            nav > div {
                justify-content: flex-start;
            }

            nav a {
                font-size: 14px;
            }

            .hero {
                padding: 30px 18px;
            }

            .hero h1 {
                font-size: 35px;
            }

            .hero p {
                font-size: 15px;
            }

            .hero-card {
                padding: 20px 16px;
            }

            .container {
                padding: 12px;
            }

            .templates {
                grid-template-columns: minmax(0, 1fr);
            }

            .panel {
                padding: 17px;
                border-radius: 12px;
            }

            label {
                margin-top: 14px;
            }

            input,
            textarea {
                padding: 12px;
                font-size: 16px;
            }

            .button {
                width: 100%;
                margin: 7px 0;
                padding: 13px 16px;
            }

            #preview {
                padding: 18px;
                border-radius: 12px;
            }

            #previewName {
                font-size: 30px;
            }

            .skill {
                margin: 3px 2px;
                padding: 7px 10px;
                font-size: 14px;
            }

            footer {
                font-size: 13px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto;
            }

            *,
            *::before,
            *::after {
                transition-duration: 0.01ms !important;
                animation-duration: 0.01ms !important;
            }
        }



        /* Center the entire Creatique layout */
        body { text-align: center; }
        nav { justify-content: center; text-align: center; }
        nav > * { text-align: center; }
        nav div { display: flex; justify-content: center; align-items: center; flex-wrap: wrap; gap: 12px; }
        nav a { margin-left: 0; }
        .hero { grid-template-columns: 1fr; justify-items: center; text-align: center; }
        .hero > div { width: 100%; max-width: 760px; margin-left: auto; margin-right: auto; }
        .hero-card { width: 100%; max-width: 420px; margin: 0 auto; }
        .container { width: min(100% - 28px, 1000px); margin-left: auto; margin-right: auto; }
        .section-title, .panel, #preview { text-align: center; }
        .templates { justify-content: center; }
        .panel { width: 100%; margin-left: auto; margin-right: auto; }
        label { text-align: center; }
        input, textarea { text-align: center; }
        input[type="file"] { text-align: center; }
        .button { margin: 8px; }
        #preview { margin-left: auto; margin-right: auto; }
        footer { text-align: center; }
        @media (min-width: 760px) {
            .hero { grid-template-columns: 1fr; }
            .templates { grid-template-columns: repeat(2, minmax(0, 220px)); justify-content: center; }
        }
        @media (max-width: 759px) {
            nav { padding-left: 20px; padding-right: 20px; }
            .hero { padding: 40px 20px; }
            .panel, #preview { padding: 22px; }
            .templates { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        }

        /* Keep the entire page content centered, including the form. */
        .container { margin-inline: auto !important; }
        .panel, .section-title, #preview, footer { text-align: center !important; }
        .panel form { width: 100%; max-width: 760px; margin: 0 auto; }
        .panel label { text-align: center !important; }
        .panel input:not([type="radio"]), .panel textarea { text-align: center !important; }
        .panel input[type="file"] { display: block; margin: 0 auto; text-align: center; }
        #profilePicturePreview { margin: 12px auto !important; }
        #profilePicturePreview.hidden { display: none !important; }
        .profile-picture { margin: 0 auto 20px !important; }
        #previewSkills { display: flex; justify-content: center; flex-wrap: wrap; }
        .panel button, .panel .button { display: inline-block; margin: 12px auto; }


        /* Center the generated portfolio outcome itself */
        #preview {
            width: min(100%, 1000px) !important;
            margin: 30px auto !important;
            text-align: center !important;
        }
        #preview > * { text-align: center !important; }
        #previewProfilePicture { display: block; margin: 0 auto 24px !important; }
        #previewSkills { display: flex !important; justify-content: center !important; align-items: center; flex-wrap: wrap; gap: 10px; }
        #previewProjects, #previewAbout, #previewEmail { margin-left: auto; margin-right: auto; }
        #preview h1, #preview h2, #preview h3, #preview p { text-align: center !important; }

        /* Separate outcome page mode */
        body.outcome-page #home,
        body.outcome-page #templates,
        body.outcome-page #create,
        body.outcome-page footer { display: none !important; }
        body.outcome-page main.container { max-width: 100%; margin: 0 auto; padding: 0 20px 50px; }
        body.outcome-page #preview {
            display: block !important; max-width: 900px; width: 100%;
            margin: 45px auto; padding: 45px 30px; text-align: center;
            min-height: 70vh; border-radius: 18px;
        }
        body.outcome-page #preview > * { text-align: center !important; }
        body.outcome-page #previewProfilePicture { margin: 0 auto 24px !important; }
        body.outcome-page #previewSkills { display:flex; justify-content:center; align-items:center; flex-wrap:wrap; gap:10px; }
        body.outcome-page #previewProjects, body.outcome-page #previewAbout, body.outcome-page #previewEmail { margin-left:auto; margin-right:auto; }
        body.outcome-page nav { justify-content:center; }
        body.outcome-page nav > div { display:flex; justify-content:center; flex-wrap:wrap; }
        body.outcome-page nav a { margin: 0 9px; }
        body.outcome-page #editButton { display:inline-block; }

        /* Three distinct screens: Home, Create form, and Portfolio outcome */
        body.home-page #create,
        body.home-page #preview { display: none !important; }
        body.home-page #home { display: grid !important; }

        body.create-page #home,
        body.create-page #preview { display: none !important; }
        body.create-page #create { display: block !important; }

        body.outcome-page #home,
        body.outcome-page #templates,
        body.outcome-page #create,
        body.outcome-page footer { display: none !important; }
        body.outcome-page #preview { display: block !important; }

        /* Balanced Creatique layout: asymmetric hero, aligned content, responsive spacing */
        body { text-align: left; background: #080817; color: #f4f0ff; }
        nav {
            justify-content: space-between !important;
            text-align: left !important;
            padding: 18px clamp(22px, 6vw, 88px);
            background: rgba(8, 8, 25, .92);
            border-bottom: 1px solid rgba(155, 91, 255, .25);
        }
        nav h2 { color: #f8f5ff; letter-spacing: -.5px; }
        nav > div { justify-content: flex-end !important; }
        nav a { color: #d7d0f2; }
        .hero {
            grid-template-columns: minmax(0, 1.15fr) minmax(300px, .85fr) !important;
            justify-items: stretch !important;
            gap: clamp(32px, 6vw, 88px);
            padding: clamp(54px, 8vw, 100px) clamp(22px, 8vw, 120px);
            text-align: left !important;
            background: radial-gradient(ellipse at 82% 20%, rgba(111, 42, 220, .28), transparent 36%),
                        radial-gradient(ellipse at 5% 100%, rgba(48, 38, 155, .22), transparent 38%), #080817;
        }
        .hero > div { max-width: none !important; margin: 0 !important; }
        .hero h1 { max-width: 680px; font-size: clamp(42px, 5.5vw, 72px); letter-spacing: -1.8px; color: #f8f6ff; }
        .hero p { max-width: 560px; color: #b6b0d3; font-size: 1.05rem; }
        .eyebrow { background: rgba(124, 58, 237, .12); border: 1px solid rgba(168, 113, 255, .35); border-radius: 999px; padding: 9px 13px; letter-spacing: 1.6px; }
        .hero-card {
            width: 100% !important; max-width: 460px !important; justify-self: end;
            margin: 0 !important; padding: clamp(24px, 3vw, 38px);
            background: linear-gradient(145deg, rgba(31, 25, 65, .96), rgba(12, 12, 35, .98));
            border: 1px solid rgba(150, 91, 255, .38);
            border-radius: 24px; text-align: left !important;
            box-shadow: 0 24px 70px rgba(0, 0, 0, .3), 0 0 38px rgba(108, 43, 220, .12);
        }
        .hero-card .avatar { margin: 22px 0; background: linear-gradient(135deg, #7c3aed, #c026d3); box-shadow: 0 0 28px rgba(147, 51, 234, .35); }
        .hero-card h2 { color: #faf7ff; }
        .hero-card p { color: #b9b1d9; }
        .container { width: min(1120px, calc(100% - 44px)); margin: 34px auto !important; }
        .panel { text-align: left !important; background: #111126; color: #f3efff; border: 1px solid rgba(145, 95, 255, .2); border-radius: 20px; }
        .panel h2, .section-title { text-align: left !important; }
        .panel p { color: #b9b3d1; }
        .panel form { max-width: 100%; margin: 0 !important; }
        .panel label { display: block; text-align: left !important; color: #e5ddff; margin: 16px 0 7px; }
        .panel input:not([type="radio"]), .panel textarea { width: 100%; text-align: left !important; color: #f7f3ff; background: #09091b; border: 1px solid #343052; border-radius: 10px; padding: 13px 14px; }
        .panel input::placeholder, .panel textarea::placeholder { color: #77718f; }
        .panel input[type="file"] { margin: 0; }
        .panel button, .panel .button { margin: 16px 10px 0 0; }
        #preview { width: min(100%, 1040px) !important; margin: 34px auto !important; padding: clamp(24px, 5vw, 54px) !important; background: linear-gradient(145deg, #111126, #17102b) !important; border: 1px solid rgba(147, 51, 234, .5); border-radius: 24px; color: #f4f0ff; text-align: left !important; box-shadow: 0 24px 70px rgba(0,0,0,.28); }
        #preview > * { text-align: left !important; }
        #previewProfilePicture { margin: 0 0 22px !important; }
        #preview h1 { font-size: clamp(30px, 4vw, 46px); }
        #preview h2 { margin-top: 28px; color: #f4eaff; }
        #preview h3 { color: #b68aff; }
        #preview p { max-width: 760px; color: #c4bddf; line-height: 1.8; }
        #previewSkills { justify-content: flex-start !important; }
        #previewProjects, #previewAbout, #previewEmail { margin-left: 0; margin-right: 0; }
        body.outcome-page main.container { width: min(1120px, calc(100% - 44px)); max-width: 1120px; margin: 0 auto !important; padding: 0 0 50px; }
        body.outcome-page #preview { max-width: 1040px; margin: 42px auto !important; min-height: 0; }
        body.outcome-page #preview > * { text-align: left !important; }
        body.outcome-page nav { justify-content: space-between !important; }
        body.outcome-page nav > div { justify-content: flex-end !important; }
        footer { color: #8983a9; text-align: center; border-top: 1px solid rgba(155, 91, 255, .16); }
        @media (max-width: 760px) {
            nav { align-items: flex-start; flex-direction: column; }
            nav > div { justify-content: flex-start !important; }
            .hero { grid-template-columns: minmax(0, 1fr) !important; padding: 42px 22px; }
            .hero-card { max-width: 560px !important; justify-self: start; }
            .hero h1 { font-size: clamp(38px, 10vw, 56px); }
            .container, body.outcome-page main.container { width: calc(100% - 28px); }
            #preview { padding: 24px !important; }
        }



        /* Homepage balance pass: centered page width, aligned hero, consistent rhythm */
        body.home-page { overflow-x: hidden; }
        body.home-page nav { min-height: 76px; gap: 24px; }
        body.home-page nav h2 { margin: 0; flex-shrink: 0; }
        body.home-page nav > div { gap: clamp(14px, 2.3vw, 30px); flex-wrap: wrap; }
        body.home-page .hero {
            width: min(1240px, 100%);
            margin: 0 auto;
            min-height: 520px;
            grid-template-columns: minmax(0, 1.12fr) minmax(300px, .88fr) !important;
            align-items: center;
            gap: clamp(36px, 6vw, 84px);
            padding: clamp(64px, 8vw, 104px) clamp(28px, 6vw, 82px);
        }
        body.home-page .hero > div:first-child { max-width: 650px !important; }
        body.home-page .hero .eyebrow { display: inline-flex; align-items: center; margin-bottom: 22px; font-size: 11px; }
        body.home-page .hero h1 { margin: 0 0 22px; max-width: 650px; font-size: clamp(44px, 5vw, 68px); line-height: 1.08; letter-spacing: -2px; }
        body.home-page .hero p { margin: 0 0 28px; max-width: 520px; font-size: clamp(15px, 1.25vw, 18px); line-height: 1.8; }
        body.home-page .hero .button { display: inline-flex; align-items: center; justify-content: center; min-height: 48px; padding: 14px 22px; margin: 0 10px 10px 0; border-radius: 10px; font-weight: 700; }
        body.home-page .hero-card { align-self: center; justify-self: end; max-width: 410px !important; padding: clamp(26px, 3vw, 38px); }
        body.home-page .hero-card .avatar { width: 76px; height: 76px; display: grid; place-items: center; border-radius: 20px; font-size: 28px; }
        body.home-page .hero-card h2 { margin: 0 0 10px; font-size: clamp(22px, 2.2vw, 28px); line-height: 1.2; }
        body.home-page .hero-card p { margin: 0; font-size: 14px; line-height: 1.75; }
        body.home-page .container { width: min(1120px, calc(100% - 48px)); margin: 52px auto !important; padding: 0; }
        body.home-page .section-title { max-width: 660px; margin: 0 auto 28px; }
        body.home-page .section-title h2 { margin-bottom: 10px; font-size: clamp(26px, 3vw, 34px); }
        body.home-page .templates { gap: 18px; }
        body.home-page footer { padding: 24px 20px; }
        @media (max-width: 760px) {
            body.home-page nav { align-items: center; }
            body.home-page nav > div { justify-content: flex-start !important; gap: 10px 18px; }
            body.home-page .hero { width: 100%; min-height: auto; grid-template-columns: minmax(0, 1fr) !important; gap: 34px; padding: 54px 24px 46px; }
            body.home-page .hero h1 { font-size: clamp(38px, 9vw, 54px); letter-spacing: -1.3px; }
            body.home-page .hero-card { width: 100% !important; max-width: 520px !important; justify-self: stretch; }
            body.home-page .container { width: calc(100% - 36px); margin: 38px auto !important; }
            body.home-page .templates { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        }
        @media (max-width: 440px) {
            body.home-page .templates { grid-template-columns: minmax(0, 1fr); }
            body.home-page .hero .button { width: 100%; margin-right: 0; }
        }


        /* Side-by-side homepage visual: avatar stays beside the copy */
        body.home-page .hero-card { max-width: 470px !important; padding: 24px !important; }
        body.home-page .hero-card-dots { color: #776c99; font-size: 12px; letter-spacing: 3px; margin-bottom: 26px; }
        body.home-page .hero-card-row { display: grid; grid-template-columns: 112px minmax(0, 1fr); align-items: center; gap: 22px; }
        body.home-page .hero-card .avatar { width: 112px; height: 138px; margin: 0 !important; border-radius: 18px; font-size: 38px; flex-shrink: 0; }
        body.home-page .hero-card-copy { min-width: 0; }
        body.home-page .hero-card-label { display: block; color: #b99aff; font-size: 10px; font-weight: 800; letter-spacing: 1.5px; margin-bottom: 10px; }
        body.home-page .hero-card h2 { font-size: clamp(19px, 2vw, 25px); }
        body.home-page .hero-card p { font-size: 13px; line-height: 1.65; }
        body.home-page .hero-card-swatches { display: flex; align-items: center; gap: 8px; margin-top: 16px; }
        body.home-page .hero-card-swatches .swatch { margin: 0; }
        @media (max-width: 760px) {
            body.home-page .hero-card { max-width: 520px !important; }
            body.home-page .hero-card-row { grid-template-columns: 92px minmax(0, 1fr); gap: 17px; }
            body.home-page .hero-card .avatar { width: 92px; height: 116px; }
        }
        @media (max-width: 390px) {
            body.home-page .hero-card-row { grid-template-columns: 1fr; }
            body.home-page .hero-card .avatar { width: 82px; height: 82px; }
        }



        /* Generated portfolio: text left, square profile photo right */
        body.outcome-page #preview .portfolio-identity {
            display: grid !important;
            grid-template-columns: minmax(0, 1fr) 200px !important;
            align-items: center !important;
            gap: 32px !important;
            width: 100% !important;
            margin: 0 0 28px !important;
            text-align: left !important;
        }
        body.outcome-page #preview .portfolio-identity-text {
            min-width: 0 !important;
            text-align: left !important;
        }
        body.outcome-page #preview #previewName {
            margin: 0 0 12px !important;
            font-size: clamp(28px, 4vw, 46px) !important;
            line-height: 1.15 !important;
            overflow-wrap: anywhere !important;
            text-align: left !important;
        }
        body.outcome-page #preview #previewJob {
            margin: 0 !important;
            text-align: left !important;
        }
        body.outcome-page #preview #previewProfilePicture:not(.hidden) {
            display: block !important;
            grid-column: 2 !important;
            width: 200px !important;
            height: 200px !important;
            object-fit: cover !important;
            border-radius: 8px !important;
            margin: 0 !important;
            justify-self: end !important;
            align-self: center !important;
        }
        body.outcome-page #preview > hr { margin: 28px 0 !important; }
        body.outcome-page #preview h2,
        body.outcome-page #preview p { text-align: left !important; }
        body.outcome-page #preview #previewSkills {
            display: flex !important;
            justify-content: flex-start !important;
            flex-wrap: wrap !important;
            gap: 10px !important;
        }
        @media (max-width: 600px) {
            body.outcome-page #preview .portfolio-identity {
                grid-template-columns: minmax(0, 1fr) 125px !important;
                gap: 14px !important;
            }
            body.outcome-page #preview #previewProfilePicture:not(.hidden) {
                width: 125px !important;
                height: 125px !important;
            }
            body.outcome-page #preview #previewName {
                font-size: clamp(23px, 6vw, 34px) !important;
            }
        }

        /* Balanced typography and spacing for the generated portfolio */
        body.outcome-page #preview {
            text-align: left !important;
            line-height: 1.7 !important;
        }
        body.outcome-page #preview h1,
        body.outcome-page #preview h2,
        body.outcome-page #preview h3,
        body.outcome-page #preview p {
            text-align: left !important;
            overflow-wrap: anywhere;
        }
        body.outcome-page #preview h2 {
            font-size: clamp(21px, 2.5vw, 26px) !important;
            line-height: 1.3 !important;
            margin: 0 0 14px !important;
        }
        body.outcome-page #preview #previewAbout,
        body.outcome-page #preview #previewProjects,
        body.outcome-page #preview #previewEmail {
            max-width: 820px !important;
            margin: 0 !important;
            line-height: 1.85 !important;
            font-size: 16px !important;
        }
        body.outcome-page #preview > hr {
            margin: 30px 0 !important;
        }
        body.outcome-page #preview #previewSkills {
            display: flex !important;
            align-items: center !important;
            justify-content: flex-start !important;
            gap: 10px !important;
            line-height: 1.5 !important;
        }
        body.outcome-page #preview #previewSkills .skill {
            margin: 0 !important;
        }
        @media (max-width: 600px) {
            body.outcome-page #preview #previewAbout,
            body.outcome-page #preview #previewProjects,
            body.outcome-page #preview #previewEmail {
                font-size: 15px !important;
                line-height: 1.75 !important;
            }
            body.outcome-page #preview > hr { margin: 24px 0 !important; }
        }

    </style>
</head>

<body>

<nav>
    <h2>Creatique</h2>

    <div>
        <a href="/?page=home">Home</a>
        <a href="/?page=create">Create</a>
        <a href="/templates">Templates</a>
        <a href="/?page=portfolio">My Portfolio</a>
    </div>
</nav>

<section class="hero" id="home">
    <div>
        <span class="eyebrow">ONLINE PORTFOLIO TEMPLATE GENERATOR</span>

        <h1>
            Build a portfolio<br>
            that feels <span class="highlight">like you.</span>
        </h1>

        <p>
            Create your portfolio, choose from four professional
            designs, and preview your own personal website.
        </p>

        <a href="/?page=create" class="button">Create Portfolio →</a>
        <a href="/templates" class="button secondary">Explore Templates</a>
    </div>

    <div class="hero-card">
        <div class="hero-card-dots">● ● ●</div>
        <div class="hero-card-row">
            <div class="avatar" aria-hidden="true">C</div>
            <div class="hero-card-copy">
                <span class="hero-card-label">YOUR NEXT CHAPTER</span>
                <h2>Your Personal Portfolio</h2>
                <p>Showcase your skills, projects, and experience in one polished place.</p>
                <div class="hero-card-swatches"><span class="swatch swatch-purple"></span><span class="swatch swatch-gradient"></span></div>
            </div>
        </div>
    </div>
</section>

<main class="container">

    

    <section class="panel" id="create">
        <h2>Create Your Portfolio</h2>
        <p>Enter your information below.</p>

        <form id="portfolioForm">

            <label for="name">Full Name</label>
            <input id="name" required
                   placeholder="Enter your name">

            <label for="profilePicture">Profile Picture (optional)</label>
            <input id="profilePicture" type="file" accept="image/png,image/jpeg,image/webp,image/gif">
            <p class="small-note">Choose a JPG, PNG, WEBP, or GIF image. Maximum size: 5 MB.</p>
            <img id="profilePicturePreview" class="hidden" alt="Selected profile picture preview">

            <label for="job">Job Title</label>
            <input id="job" required
                   placeholder="e.g. Web Developer">

            <label for="about">About Me</label>
            <textarea id="about" required
                      placeholder="Tell us about yourself"></textarea>

            <label for="skills">Skills</label>
            <input id="skills" required
                   placeholder="HTML, CSS, PHP, Laravel">

            <label for="projects">Projects</label>
            <textarea id="projects" required
                      placeholder="Describe your projects"></textarea>

            <label for="email">Email Address</label>
            <input id="email" type="email" required
                   placeholder="you@example.com">

            <button class="button" type="submit">
                Generate Portfolio
            </button>

        </form>
    </section>

    <section id="preview" class="hidden">
        <div class="portfolio-identity">
            <div class="portfolio-identity-text">
                <h1 id="previewName"></h1>
                <h3 id="previewJob"></h3>
            </div>
            <img id="previewProfilePicture" class="profile-picture hidden" alt="Profile picture">
        </div>

        <hr>

        <h2>About Me</h2>
        <p id="previewAbout" class="project-text"></p>

        <hr>

        <h2>My Skills</h2>
        <div id="previewSkills"></div>

        <hr>

        <h2>My Projects</h2>
        <p id="previewProjects" class="project-text"></p>

        <hr>

        <h2>Contact Me</h2>
        <p id="previewEmail"></p>

        <button type="button" class="button" id="viewButton">
            View Full Portfolio
        </button>

        <button type="button" class="button secondary" id="editButton">
            Edit Information
        </button>
    </section>

</main>

<footer>
    © 2026 Creatique | Portfolio Template Generator
</footer>

<script>
    const form = document.getElementById('portfolioForm');
    const preview = document.getElementById('preview');
    const pageMode = new URLSearchParams(window.location.search).get('page') || 'home';
    document.body.classList.remove('home-page', 'create-page', 'outcome-page');
    if (pageMode === 'portfolio') {
        document.body.classList.add('outcome-page');
    } else if (pageMode === 'create') {
        document.body.classList.add('create-page');
    } else {
        document.body.classList.add('home-page');
    }

    
const STORAGE_KEY = 'purplefolio_saved_portfolio_v1';
    let savedData = null;
    try { savedData = JSON.parse(localStorage.getItem(STORAGE_KEY) || 'null'); } catch (error) { savedData = null; }

    let selectedTemplate = new URLSearchParams(window.location.search).get('template') || (savedData && savedData.template) || 'violet-atelier';
    if (!['violet-atelier', 'tech-noir', 'executive-onyx', 'creative-spectrum'].includes(selectedTemplate)) {
        selectedTemplate = 'violet-atelier';
    }
    let portfolio = {};
    let selectedProfilePicture = '';

    function getFormData() {
        return {
            name: document.getElementById('name').value.trim(),
            job: document.getElementById('job').value.trim(),
            about: document.getElementById('about').value.trim(),
            skills: document.getElementById('skills').value.trim(),
            projects: document.getElementById('projects').value.trim(),
            email: document.getElementById('email').value.trim(),
            profilePicture: selectedProfilePicture,
            template: selectedTemplate
        };
    }

    function savePortfolioData(showMessage = false) {
        try {
            localStorage.setItem(STORAGE_KEY, JSON.stringify(getFormData()));
            if (showMessage) alert('Your portfolio information has been saved in this browser.');
            return true;
        } catch (error) {
            if (showMessage) alert('Your information could not be fully saved. Try using a smaller profile picture.');
            return false;
        }
    }

    function restorePortfolioData() {
        if (!savedData || typeof savedData !== 'object') return;
        ['name', 'job', 'about', 'skills', 'projects', 'email'].forEach(field => {
            const input = document.getElementById(field);
            if (input && typeof savedData[field] === 'string') input.value = savedData[field];
        });
        if (typeof savedData.profilePicture === 'string') {
            selectedProfilePicture = savedData.profilePicture;
            if (selectedProfilePicture) {
                profilePicturePreview.src = selectedProfilePicture;
                profilePicturePreview.classList.remove('hidden');
            }
        }
        if (['violet-atelier', 'tech-noir', 'executive-onyx', 'creative-spectrum'].includes(savedData.template) && !new URLSearchParams(window.location.search).get('template')) {
            selectedTemplate = savedData.template;
            const radio = document.querySelector('input[name="template"][value="' + selectedTemplate + '"]');
            if (radio) radio.checked = true;
            applyPageTheme();
        }
        if (savedData.name && savedData.job && savedData.about && savedData.skills && savedData.projects && savedData.email) {
            portfolio = { ...savedData };
            renderPortfolio(false);
        }
    }

    const profilePictureInput = document.getElementById('profilePicture');
    const profilePicturePreview = document.getElementById('profilePicturePreview');

    profilePictureInput.addEventListener('change', function () {
        const file = this.files && this.files[0];
        if (!file) {
            selectedProfilePicture = '';
            profilePicturePreview.classList.add('hidden');
            return;
        }

        if (!file.type.startsWith('image/')) {
            alert('Please choose an image file.');
            this.value = '';
            return;
        }
        if (file.size > 5 * 1024 * 1024) {
            alert('Please choose an image smaller than 5 MB.');
            this.value = '';
            return;
        }

        const reader = new FileReader();
        reader.onload = function (event) {
            selectedProfilePicture = event.target.result;
            profilePicturePreview.src = selectedProfilePicture;
            profilePicturePreview.classList.remove('hidden');
            savePortfolioData();
        };
        reader.readAsDataURL(file);
    });

    const themes = {
        "violet-atelier": { background:'radial-gradient(circle at 8% 0%,#30135a 0,transparent 34%),radial-gradient(circle at 100% 90%,#28104f 0,transparent 35%),#080612', page:'#080612', nav:'rgba(8,6,18,.96)', card:'linear-gradient(145deg,#211438,#100b20)', color:'#f8f5ff', muted:'#c4b9df', accent:'#b78aff', skill:'#211637', border:'#65419a', glow:'rgba(157,99,255,.20)' },
        "tech-noir": { background:'radial-gradient(circle at 10% 0%,#0a344b 0,transparent 36%),radial-gradient(circle at 100% 100%,#073342 0,transparent 34%),#050a12', page:'#050a12', nav:'rgba(5,10,18,.97)', card:'linear-gradient(145deg,#0a1b2b,#050d18)', color:'#effaff', muted:'#a8c4d4', accent:'#00e5ff', skill:'#102a3a', border:'#236477', glow:'rgba(0,229,255,.17)' },
        "executive-onyx": { background:'radial-gradient(circle at 8% 0%,#33291b 0,transparent 35%),radial-gradient(circle at 100% 100%,#25201a 0,transparent 36%),#0c0d10', page:'#0c0d10', nav:'rgba(12,13,16,.97)', card:'linear-gradient(145deg,#1c1d20,#101114)', color:'#f5f3ee', muted:'#b8b5ad', accent:'#d6b36a', skill:'#292722', border:'#665537', glow:'rgba(214,179,106,.15)' },
        "creative-spectrum": { background:'radial-gradient(circle at 0% 10%,#42143e 0,transparent 38%),radial-gradient(circle at 100% 90%,#073d4a 0,transparent 42%),#10101b', page:'#10101b', nav:'rgba(16,16,27,.97)', card:'linear-gradient(135deg,#27152e,#112631)', color:'#fff5fb', muted:'#d4c2d7', accent:'#ff6f91', skill:'#35233a', border:'#87506f', glow:'rgba(255,111,145,.18)' }
    };
    // Each selected template keeps its own dark palette across the page and outcome.
    function applyPageTheme() {
        const theme = themes[selectedTemplate] || themes['violet-atelier'];
        document.body.style.background = theme.background;
        document.body.style.color = theme.color;

        const nav = document.querySelector('nav');
        if (nav) {
            nav.style.background = theme.nav;
            nav.style.color = theme.color;
            nav.style.borderBottom = '1px solid ' + theme.border;
            nav.style.boxShadow = '0 8px 28px rgba(0,0,0,.28)';
            const navTitle = nav.querySelector('h2');
            if (navTitle) navTitle.style.color = theme.accent;
            nav.querySelectorAll('a').forEach(link => {
                link.style.color = theme.color;
                link.style.transition = 'color .2s ease';
            });
        }

        const hero = document.querySelector('.hero');
        if (hero) {
            hero.style.background = theme.background;
            hero.style.color = theme.color;
        }
        document.querySelectorAll('.hero-card, .panel, .template').forEach(card => {
            card.style.background = theme.card;
            card.style.color = theme.color;
            card.style.border = '1px solid ' + theme.border;
            card.style.boxShadow = '0 18px 50px rgba(0,0,0,.25)';
        });
        document.querySelectorAll('.hero p, .panel p, footer, .section-title p, .small-note').forEach(item => {
            item.style.color = theme.muted;
        });
        document.querySelectorAll('.eyebrow, .highlight').forEach(item => item.style.color = theme.accent);
        document.querySelectorAll('.button').forEach(button => {
            button.style.background = button.classList.contains('secondary') ? theme.skill : theme.accent;
            button.style.color = button.classList.contains('secondary') ? theme.color : '#080713';
            button.style.border = '1px solid ' + theme.border;
            button.style.boxShadow = '0 7px 24px ' + theme.glow;
        });
        document.querySelectorAll('input, textarea').forEach(field => {
            field.style.background = '#080b19';
            field.style.color = theme.color;
            field.style.borderColor = theme.border;
        });
        document.querySelectorAll('.template').forEach(card => { card.style.borderColor = theme.border; });
        const heading = document.querySelector('.hero h1');
        if (heading) heading.style.color = theme.color;
        const avatar = document.querySelector('.avatar');
        if (avatar) {
            avatar.style.background = theme.accent;
            avatar.style.boxShadow = '0 0 28px ' + theme.glow;
        }
        const footer = document.querySelector('footer');
        if (footer) { footer.style.background = theme.nav; footer.style.color = theme.muted; }

        // Theme the generated portfolio preview too, overriding the default violet CSS.
        const previewCard = document.getElementById('preview');
        if (previewCard) {
            previewCard.style.setProperty('background', theme.card, 'important');
            previewCard.style.setProperty('color', theme.color, 'important');
            previewCard.style.setProperty('border', '1px solid ' + theme.border, 'important');
            previewCard.querySelectorAll('h1, h2, h3, p, li, span, strong, label').forEach(el => {
                el.style.color = theme.color;
            });
            previewCard.querySelectorAll('h2').forEach(el => { el.style.color = theme.accent; });
            previewCard.querySelectorAll('h3').forEach(el => { el.style.color = theme.accent; });
            previewCard.querySelectorAll('a').forEach(el => { el.style.color = theme.accent; });
            previewCard.querySelectorAll('.skill, .skill-tag, .project-card').forEach(el => {
                el.style.background = theme.skill;
                el.style.borderColor = theme.border;
            });
        }
        updateTemplateCards();
    }

    function updateTemplateCards() {
        document.querySelectorAll('.template').forEach(card => {
            const radio = card.querySelector('input[name="template"]');

            if (radio) {
                card.classList.toggle(
                    'active',
                    radio.value === selectedTemplate
                );
            }
        });
    }

    applyPageTheme();

    document.querySelectorAll('input[name="template"]').forEach(radio => {
        radio.addEventListener('change', function () {
            selectedTemplate = this.value;
            savePortfolioData();
            applyPageTheme();

            if (portfolio.name) {
                renderPortfolio();
            }
        });
    });

    function renderPortfolio(shouldScroll = true) {
        const theme = themes[selectedTemplate];

        preview.classList.remove('hidden');
        preview.style.background = theme.card;
        preview.style.color = theme.color;
        preview.style.border = '1px solid ' + theme.border;
        preview.style.boxShadow = '0 24px 70px ' + theme.glow + ', 0 18px 45px rgba(0,0,0,.32)';
        preview.style.borderRadius = '24px';
        preview.style.backdropFilter = 'blur(18px)';
        preview.style.position = 'relative';
        preview.style.overflow = 'hidden';
        preview.style.minHeight = '70vh';

        preview.querySelectorAll('hr').forEach(rule => { rule.style.border = '0'; rule.style.height = '1px'; rule.style.background = 'linear-gradient(90deg,transparent,' + theme.border + ',transparent)'; rule.style.margin = '30px 0'; });

        const previewPicture = document.getElementById('previewProfilePicture');
        if (portfolio.profilePicture) {
            previewPicture.src = portfolio.profilePicture;
            previewPicture.classList.remove('hidden');
        } else {
            previewPicture.removeAttribute('src');
            previewPicture.classList.add('hidden');
        }

        document.getElementById('previewName').textContent = portfolio.name;
        document.getElementById('previewName').style.color = theme.color;
        document.getElementById('previewName').style.textShadow = '0 0 28px ' + theme.glow;

        document.getElementById('previewJob').textContent =
            portfolio.job;

        document.getElementById('previewJob').style.color = theme.accent;
        document.getElementById('previewJob').style.textShadow = '0 0 18px ' + theme.glow;

        document.getElementById('previewAbout').textContent =
            portfolio.about;

        document.getElementById('previewProjects').textContent =
            portfolio.projects;

        const skillsBox = document.getElementById('previewSkills');
        skillsBox.replaceChildren();

        portfolio.skills.split(',').forEach(item => {
            const skill = item.trim();

            if (skill) {
                const span = document.createElement('span');
                span.className = 'skill';
                span.textContent = skill;
                span.style.background = theme.skill;
                span.style.color = theme.color;
                span.style.border = '1px solid ' + theme.border;
                span.style.borderRadius = '999px';
                span.style.padding = '9px 14px';
                span.style.boxShadow = '0 4px 18px ' + theme.glow;
                skillsBox.appendChild(span);
            }
        });

        const emailBox = document.getElementById('previewEmail');
        emailBox.replaceChildren();

        const emailLink = document.createElement('a');
        emailLink.textContent = portfolio.email;
        emailLink.href = 'mailto:' + portfolio.email;
        emailLink.style.color = theme.accent;

        emailBox.appendChild(emailLink);

        if (shouldScroll) {
            preview.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        portfolio = getFormData();
        savePortfolioData();
        window.location.assign('/?page=portfolio&template=' + encodeURIComponent(selectedTemplate));
    });

    document.querySelectorAll('#portfolioForm input:not([type="file"]), #portfolioForm textarea').forEach(field => {
        field.addEventListener('input', () => savePortfolioData());
    });

    document.getElementById('editButton').addEventListener('click', function () {
        window.location.href = '/?page=create#create';
    });

    document.getElementById('viewButton').addEventListener('click', function () {
        const theme = themes[selectedTemplate];
        const safe = value => String(value).replace(/[&<>"']/g, char => ({
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#39;'
        })[char]);

        const skillsHTML = portfolio.skills.split(',')
            .map(skill => skill.trim())
            .filter(Boolean)
            .map(skill => '<span class="skill-pill">' + safe(skill) + '</span>')
            .join('');

        const newWindow = window.open('', '_blank');

        if (!newWindow) {
            alert('Allow pop-ups in your browser to view your portfolio.');
            return;
        }

        newWindow.document.write(`
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>${safe(portfolio.name)} - Portfolio</title>
                <style>
                    *{box-sizing:border-box} body{font-family:Inter,Arial,sans-serif;max-width:1000px;min-height:100vh;margin:0 auto;padding:42px 24px;line-height:1.7;background:${theme.background};color:${theme.color};overflow-wrap:anywhere}
                    body:before{content:"";position:fixed;inset:0;pointer-events:none;background:radial-gradient(circle at 8% 8%,${theme.glow},transparent 34%),radial-gradient(circle at 95% 90%,${theme.glow},transparent 35%);z-index:-1}
                    header,.section-card{border:1px solid ${theme.border};background:${theme.card};border-radius:22px;padding:30px;margin-bottom:22px;box-shadow:0 18px 55px rgba(0,0,0,.25)}
                    header{text-align:center;padding:42px 24px} header img{width:180px;height:180px;object-fit:cover;border-radius:8px;display:block;margin:0 auto 22px;border:4px solid ${theme.accent};box-shadow:0 0 28px ${theme.glow}}
                    h1{font-size:clamp(2rem,5vw,3.4rem);line-height:1.1;margin:0 0 8px;color:${theme.color};letter-spacing:-1.5px} h2{color:${theme.accent};margin:0 0 12px} h3{color:${theme.accent};font-weight:600;margin:0}
                    .section-card{padding:24px 28px}.skill-pill{display:inline-block;padding:8px 13px;margin:5px;border-radius:999px;background:${theme.skill};border:1px solid ${theme.border};color:${theme.color};box-shadow:0 4px 18px ${theme.glow}}
                    a{color:${theme.accent};text-decoration:none} .divider{height:1px;background:linear-gradient(90deg,transparent,${theme.border},transparent);margin:22px 0}
                    @media(max-width:600px){body{padding:20px 14px}header,.section-card{padding:22px 18px;border-radius:17px}}
                /* Generated portfolio identity: text on the left, square portrait on the right. */
        body.outcome-page #preview .portfolio-identity {
            display: grid !important;
            grid-template-columns: minmax(0, 1fr) 200px !important;
            grid-template-areas: "identity portrait" !important;
            align-items: center !important;
            gap: clamp(22px, 5vw, 54px) !important;
            width: 100% !important;
            margin: 0 0 28px !important;
            text-align: left !important;
        }
        body.outcome-page #preview .portfolio-identity-text {
            grid-area: identity !important;
            min-width: 0 !important;
            text-align: left !important;
        }
        body.outcome-page #preview #previewName {
            margin: 0 0 16px !important;
            max-width: 100% !important;
            font-size: clamp(30px, 4vw, 48px) !important;
            line-height: 1.12 !important;
            overflow-wrap: anywhere !important;
            text-align: left !important;
        }
        body.outcome-page #preview #previewJob {
            margin: 0 !important;
            text-align: left !important;
        }
        body.outcome-page #preview #previewProfilePicture {
            grid-area: portrait !important;
            display: block !important;
            width: 200px !important;
            height: 200px !important;
            max-width: 100% !important;
            object-fit: cover !important;
            border-radius: 10px !important;
            margin: 0 !important;
            justify-self: end !important;
            align-self: center !important;
        }
        body.outcome-page #preview > hr { margin: 28px 0 !important; }
        body.outcome-page #preview h2,
        body.outcome-page #preview p,
        body.outcome-page #preview #previewSkills { text-align: left !important; }
        body.outcome-page #preview #previewSkills { justify-content: flex-start !important; }
        @media (max-width: 600px) {
            body.outcome-page #preview .portfolio-identity {
                grid-template-columns: minmax(0, 1fr) 94px !important;
                gap: 14px !important;
            }
            body.outcome-page #preview #previewProfilePicture {
                width: 94px !important; height: 94px !important;
            }
            body.outcome-page #preview #previewName { font-size: clamp(25px, 7vw, 34px) !important; }
            body.outcome-page #preview { padding: 24px 18px !important; }
        }
        </style>
            </head>
            <body>
                <header>
                    ${portfolio.profilePicture ? '<img src="' + portfolio.profilePicture + '" alt="Profile picture">' : ''}
                    <h1>${safe(portfolio.name)}</h1><h3>${safe(portfolio.job)}</h3>
                </header>
                <section class="section-card"><h2>About Me</h2><p>${safe(portfolio.about)}</p></section>
                <section class="section-card"><h2>My Skills</h2><div>${skillsHTML}</div></section>
                <section class="section-card"><h2>My Projects</h2><p>${safe(portfolio.projects)}</p></section>
                <section class="section-card"><h2>Contact Me</h2><a href="mailto:${safe(portfolio.email)}">${safe(portfolio.email)}</a></section>
            </body>
            </html>
        `);

        newWindow.document.close();
    });

    // Restore saved information. The finished portfolio has its own page.
    restorePortfolioData();
    // Re-apply the template requested in the URL after restoring saved profile data.
    const urlTemplate = new URLSearchParams(window.location.search).get('template');
    if (urlTemplate && Object.prototype.hasOwnProperty.call(themes, urlTemplate)) {
        selectedTemplate = urlTemplate;
        applyPageTheme();
    }
    if (pageMode === 'portfolio') {
        if (portfolio && portfolio.name) {
            document.getElementById('create').style.display = 'none';
            const home = document.getElementById('home');
            if (home) home.style.display = 'none';
            preview.classList.remove('hidden');
            renderPortfolio(false);
            document.getElementById('viewButton').style.display = 'none';
        } else {
            window.location.assign('/?page=create#create');
        }
    } else {
        document.getElementById('create').style.display = '';
        preview.classList.add('hidden');
    }
</script>

</body>
</html>