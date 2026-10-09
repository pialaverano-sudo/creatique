<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Creatique | Portfolio Builder</title>
<style>
:root{--ink:#211936;--muted:#756d86;--purple:#7654d6;--line:#e9e3f5;--bg:#f7f5fc;--white:#fff}
*{box-sizing:border-box}body{margin:0;background:var(--bg);color:var(--ink);font:15px/1.5 Arial,sans-serif}header{background:#fff;border-bottom:1px solid var(--line);padding:17px max(22px,calc((100% - 1160px)/2));display:flex;align-items:center;justify-content:space-between;gap:18px}header strong{font-size:23px;color:var(--purple)}header span{color:var(--muted)}main{max-width:1160px;margin:28px auto;padding:0 20px}.intro{margin-bottom:22px}.intro h1{font-size:clamp(26px,4vw,36px);margin:0 0 5px}.intro p{color:var(--muted);margin:0}.layout{display:grid;grid-template-columns:minmax(300px,430px) minmax(0,1fr);gap:22px;align-items:start}.panel{background:#fff;border:1px solid var(--line);border-radius:18px;padding:22px;box-shadow:0 8px 28px #2b17400a}.panel h2{font-size:19px;margin:0 0 16px}.field{margin-bottom:13px}.field label{display:block;font-weight:700;font-size:13px;margin-bottom:5px}.field input,.field textarea,.field select{width:100%;padding:10px 11px;border:1px solid #ded7eb;border-radius:9px;font:inherit;background:#fff;color:var(--ink)}.field textarea{min-height:76px;resize:vertical}.grid2{display:grid;grid-template-columns:1fr 1fr;gap:12px}.templates{display:grid;grid-template-columns:repeat(3,1fr);gap:9px;margin-bottom:18px}.template{cursor:pointer;border:1px solid var(--line);border-radius:12px;padding:12px 8px;text-align:center;background:#fff}.template input{accent-color:var(--purple)}.template b{display:block;margin-top:5px}.template small{color:var(--muted)}.template:has(input:checked){border-color:var(--purple);background:#f6f1ff;box-shadow:0 0 0 2px #7654d61a}.actions{display:flex;flex-wrap:wrap;gap:9px}.btn{border:0;border-radius:10px;padding:11px 15px;background:var(--purple);color:#fff;font-weight:700;cursor:pointer}.btn.secondary{background:#eee8fa;color:#4d388b}.preview-head{display:flex;align-items:center;justify-content:space-between;gap:10px;margin-bottom:14px}.preview-head h2{margin:0}.paper{min-height:600px;background:#fff;border:1px solid var(--line);border-radius:14px;overflow:hidden}.portfolio{min-height:600px}.hero{padding:34px;background:#f0eaff}.hero h1{font-size:34px;line-height:1.1;margin:0 0 7px}.hero .job{color:var(--purple);font-weight:700}.hero p{margin:10px 0 0;color:#625675}.avatar{width:94px;height:94px;object-fit:cover;border-radius:50%;border:4px solid #fff;margin-bottom:15px;background:#ddd}.bodycontent{padding:26px 34px}.section{margin-bottom:22px}.section h3{font-size:13px;letter-spacing:1.5px;text-transform:uppercase;color:var(--purple);margin:0 0 8px}.section p{white-space:pre-wrap;margin:0;color:#514961}.pill{display:inline-block;padding:5px 9px;margin:3px 4px 2px 0;background:#f0eaff;border-radius:20px;font-size:12px}.contact{font-size:13px;color:#665c76;overflow-wrap:anywhere}.link{color:var(--purple);overflow-wrap:anywhere}.empty{padding:45px 20px;text-align:center;color:var(--muted)}.modern .hero{background:#211936;color:#fff}.modern .hero .job,.modern .section h3{color:#a994ff}.modern .hero p,.modern .contact{color:#d7cfea}.modern .pill{background:#eee8ff}.creative .hero{background:linear-gradient(125deg,#fbe8f1,#e9e5ff 60%,#dcf7f1);border-bottom:5px solid #7654d6}.creative .avatar{border-radius:22px}.creative .section{padding-left:13px;border-left:3px solid #ded3ff}.simple .hero{background:#fff;border-bottom:1px solid var(--line)}.simple .avatar{width:76px;height:76px}.simple .bodycontent{padding-top:22px}footer{text-align:center;color:#9289a2;font-size:12px;padding:20px}@media(max-width:800px){.layout{grid-template-columns:1fr}header{padding:15px 20px}.paper,.portfolio{min-height:400px}}@media(max-width:430px){.grid2{grid-template-columns:1fr}.panel{padding:16px}.hero,.bodycontent{padding:22px}.hero h1{font-size:28px}}
</style>
</head>
<body>
<header><strong>Creatique</strong><span>Build a portfolio that feels like you.</span></header>
<main>
<div class="intro"><h1>Create your portfolio</h1><p>Add your details, choose a style, and preview your portfolio instantly.</p></div>
<div class="layout">
<section class="panel">
<h2>1. Your information</h2>
<form id="portfolioForm">
<div class="field"><label for="name">Full name *</label><input id="name" placeholder="e.g. Alex Santos" required></div>
<div class="grid2">
<div class="field"><label for="job">Job title</label><input id="job" placeholder="Designer / Developer"></div>
<div class="field"><label for="photo">Profile picture</label><input id="photo" type="file" accept="image/*"></div>
</div>
<div class="grid2">
<div class="field"><label for="email">Email</label><input id="email" type="email" placeholder="you@example.com"></div>
<div class="field"><label for="phone">Contact number</label><input id="phone" placeholder="+63 ..."></div>
</div>
<div class="field"><label for="address">Address</label><input id="address" placeholder="City, Country"></div>
<div class="field"><label for="about">About me</label><textarea id="about" placeholder="A short introduction about yourself..."></textarea></div>
<div class="field"><label for="education">Education</label><textarea id="education" placeholder="School, course, and graduation year"></textarea></div>
<div class="field"><label for="skills">Skills</label><textarea id="skills" placeholder="HTML, CSS, UI design (separate with commas)"></textarea></div>
<div class="field"><label for="projects">Projects</label><textarea id="projects" placeholder="Project name — what you created"></textarea></div>
<div class="field"><label for="experience">Work experience</label><textarea id="experience" placeholder="Role, company, dates, and responsibilities"></textarea></div>
<div class="field"><label for="links">Social media / website links</label><textarea id="links" placeholder="https://... (one link per line)"></textarea></div>
<div class="field"><label for="extra">Additional information (optional)</label><textarea id="extra" placeholder="Awards, interests, certifications..."></textarea></div>
<h2>2. Choose a template</h2>
<div class="templates">
<label class="template"><input type="radio" name="template" value="simple" checked><b>Simple</b><small>Clean & classic</small></label>
<label class="template"><input type="radio" name="template" value="modern"><b>Modern</b><small>Bold & polished</small></label>
<label class="template"><input type="radio" name="template" value="creative"><b>Creative</b><small>Colorful & expressive</small></label>
</div>
<div class="actions"><button class="btn" type="submit">Save & preview</button><button class="btn secondary" type="button" id="clearBtn">Clear form</button></div>
</form>
</section>
<section class="panel">
<div class="preview-head"><h2>Live preview</h2><button class="btn secondary" type="button" id="printBtn">Print / Save PDF</button></div>
<div class="paper"><div id="preview" class="portfolio"><div class="empty">Your portfolio preview will appear here.<br>Enter your name and select “Save & preview”.</div></div></div>
</section>
</div>
</main>
<footer>Creatique · Your story, beautifully presented.</footer>
<script>
const ids=['name','job','email','phone','address','about','education','skills','projects','experience','links','extra'];
const $=id=>document.getElementById(id);let photoData='';
function getData(){const d={};ids.forEach(id=>d[id]=$(id).value.trim());d.template=document.querySelector('input[name="template"]:checked').value;d.photo=photoData;return d}
function safe(s=''){return String(s).replace(/[&<>"']/g,c=>({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[c]))}
function section(title,value){if(!value)return '';return `<section class="section"><h3>${safe(title)}</h3><p>${safe(value)}</p></section>`}
function render(d){const root=$('preview');root.className='portfolio '+d.template;const skills=d.skills?d.skills.split(',').map(s=>s.trim()).filter(Boolean).map(s=>`<span class="pill">${safe(s)}</span>`).join(''):'';const links=d.links?d.links.split(/\n/).map(s=>s.trim()).filter(Boolean).map(s=>{let url=s;if(!/^https?:\/\//i.test(url))url='https://'+url;return `<div><a class="link" href="${safe(url)}" target="_blank" rel="noopener">${safe(s)}</a></div>`}).join(''):'';root.innerHTML=`<div class="hero">${d.photo?`<img class="avatar" src="${d.photo}" alt="Profile picture">`:''}<h1>${safe(d.name)||'Your Name'}</h1><div class="job">${safe(d.job)||'Your professional title'}</div><p>${safe(d.about)}</p><div class="contact">${[d.email,d.phone,d.address].filter(Boolean).map(safe).join(' · ')}</div></div><div class="bodycontent">${section('Education',d.education)}${skills?`<section class="section"><h3>Skills</h3>${skills}</section>`:''}${section('Projects',d.projects)}${section('Work experience',d.experience)}${links?`<section class="section"><h3>Find me online</h3>${links}</section>`:''}${section('More about me',d.extra)}</div>`}
function save(){const d=getData();try{localStorage.setItem('creatique_portfolio_v1',JSON.stringify(d))}catch(e){}render(d)}
$('portfolioForm').addEventListener('submit',e=>{e.preventDefault();save()});
$('photo').addEventListener('change',e=>{const file=e.target.files[0];if(!file){photoData='';return}if(!file.type.startsWith('image/'))return alert('Please choose an image file.');const reader=new FileReader();reader.onload=()=>{photoData=reader.result;render(getData())};reader.readAsDataURL(file)});
document.querySelectorAll('input[name="template"]').forEach(el=>el.addEventListener('change',()=>render(getData())));
$('printBtn').addEventListener('click',()=>{save();window.print()});
$('clearBtn').addEventListener('click',()=>{if(!confirm('Clear all portfolio details?'))return;$('portfolioForm').reset();photoData='';try{localStorage.removeItem('creatique_portfolio_v1')}catch(e){}$('preview').className='portfolio';$('preview').innerHTML='<div class="empty">Your portfolio preview will appear here.</div>'});
try{const saved=localStorage.getItem('creatique_portfolio_v1');if(saved){const d=JSON.parse(saved);ids.forEach(id=>{if(typeof d[id]==='string')$(id).value=d[id]});photoData=d.photo||'';const choice=document.querySelector(`input[name="template"][value="${d.template||'simple'}"]`);if(choice)choice.checked=true;render(d)}}catch(e){}
</script>
<style>@media print{body{background:#fff}header,main>.intro,main .layout>section:first-child,.preview-head button,footer{display:none!important}main{margin:0;padding:0;max-width:none}.layout{display:block}.layout>section:last-child{border:0;box-shadow:none;padding:0}.preview-head{display:none}.paper,.portfolio{border:0;min-height:0}.hero,.bodycontent{-webkit-print-color-adjust:exact;print-color-adjust:exact}}</style>
</body>
</html>
