
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Creatique | Portfolio Builder</title>
<style>
:root{--ink:#211936;--muted:#756d86;--purple:#7654d6;--line:#e9e3f5;--bg:#f7f5fc}
*{box-sizing:border-box}
body{margin:0;background:var(--bg);color:var(--ink);font:15px/1.5 Arial,sans-serif}
header{background:#fff;border-bottom:1px solid var(--line);padding:16px max(22px,calc((100% - 900px)/2));display:flex;justify-content:space-between;align-items:center;gap:15px}
header strong{font-size:23px;color:var(--purple)}
header span{color:var(--muted)}
main{max-width:900px;margin:28px auto;padding:0 20px}
.intro{margin-bottom:22px}
.intro h1{font-size:clamp(26px,4vw,36px);margin:0 0 5px}
.intro p{color:var(--muted);margin:0}
.panel{background:#fff;border:1px solid var(--line);border-radius:18px;padding:24px;box-shadow:0 8px 28px #2b17400a}
.panel h2{font-size:19px;margin:0 0 16px}
.field{margin-bottom:13px}
.field label{display:block;font-weight:700;font-size:13px;margin-bottom:5px}
.field input,.field textarea{width:100%;padding:11px;border:1px solid #ded7eb;border-radius:9px;font:inherit;background:#fff;color:var(--ink)}
.field textarea{min-height:76px;resize:vertical}
.grid2{display:grid;grid-template-columns:1fr 1fr;gap:12px}
.templates{display:grid;grid-template-columns:repeat(3,1fr);gap:12px;margin-bottom:20px}
.template{cursor:pointer;border:1px solid var(--line);border-radius:12px;padding:14px 9px;text-align:center;background:#fff}
.template input{accent-color:var(--purple)}
.template b{display:block;margin-top:5px}
.template small{color:var(--muted)}
.template:has(input:checked){border-color:var(--purple);background:#f6f1ff;box-shadow:0 0 0 2px #7654d61a}
.actions{display:flex;flex-wrap:wrap;gap:10px}
.btn{border:0;border-radius:10px;padding:12px 17px;background:var(--purple);color:#fff;font-weight:700;cursor:pointer}
.btn.secondary{background:#eee8fa;color:#4d388b}
.btn:hover{filter:brightness(.96)}
.notice{display:none;margin-top:15px;padding:12px;border-radius:10px;background:#f0eaff;color:#4d388b;overflow-wrap:anywhere}
footer{text-align:center;color:#9289a2;font-size:12px;padding:20px}
@media(max-width:600px){
 header{padding:15px 20px}
 header span{font-size:12px}
 .grid2,.templates{grid-template-columns:1fr}
 .panel{padding:17px}
}
</style>
</head>
<body>
<header><strong>Creatique.</strong><span>Build a portfolio that feels like you.</span></header>
<main>
<div class="intro">
<h1>Create your portfolio</h1>
<p>Enter your details, save your information, and generate your portfolio.</p>
</div>

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
<label class="template"><input type="radio" name="template" value="simple" checked><b>Simple</b><small>Clean &amp; classic</small></label>
<label class="template"><input type="radio" name="template" value="modern"><b>Modern</b><small>Bold &amp; polished</small></label>
<label class="template"><input type="radio" name="template" value="creative"><b>Creative</b><small>Colorful &amp; expressive</small></label>
</div>

<div class="actions">
<button class="btn" type="submit">Save Information</button>
<button class="btn" type="button" id="generateBtn">Generate Portfolio</button>
<button class="btn secondary" type="button" id="clearBtn">Clear Form</button>
</div>
<div id="notice" class="notice" role="status"></div>
</form>
</section>
</main>
<footer>Creatique · Your story, beautifully presented.</footer>

<script>
const ids=['name','job','email','phone','address','about','education','skills','projects','experience','links','extra'];
const $=id=>document.getElementById(id);
let photoData='';

function getData(){
 const d={};
 ids.forEach(id=>d[id]=$(id).value.trim());
 d.template=document.querySelector('input[name="template"]:checked').value;
 d.photo=photoData;
 return d;
}

function notify(message){
 const n=$('notice');
 n.textContent=message;
 n.style.display='block';
}

function safe(s=''){
 return String(s).replace(/[&<>"']/g,c=>({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[c]));
}

function section(title,value){
 if(!value)return '';
 return `<section class="section"><h2>${safe(title)}</h2><p>${safe(value).replace(/\n/g,'<br>')}</p></section>`;
}

function generate(d){
 const skills=d.skills
  ?d.skills.split(',').map(s=>s.trim()).filter(Boolean).map(s=>`<span class="pill">${safe(s)}</span>`).join('')
  :'';

 const links=d.links
  ?d.links.split(/\n/).map(s=>s.trim()).filter(Boolean).map(s=>{
    const url=/^https?:\/\//i.test(s)?s:'https://'+s;
    return `<a class="social-link" href="${safe(url)}" target="_blank" rel="noopener noreferrer">${safe(s)}</a>`;
  }).join('')
  :'';

 const content=`
 <header class="profile-hero">
  <div class="photo-wrap">
   ${d.photo
    ?`<img class="avatar" src="${d.photo}" alt="Profile picture">`
    :`<div class="avatar placeholder">${safe(d.name.charAt(0)||'Y')}</div>`}
  </div>
  <div class="profile-info">
   <div class="eyebrow">PORTFOLIO</div>
   <h1>${safe(d.name)||'Your Name'}</h1>
   <div class="job">${safe(d.job)||'Professional'}</div>
   ${d.about?`<p class="about">${safe(d.about).replace(/\n/g,'<br>')}</p>`:''}
   <div class="contact">${[d.email,d.phone,d.address].filter(Boolean).map(safe).join(' · ')}</div>
  </div>
 </header>
 <div class="bodycontent">
  ${section('About Me',d.about)}
  ${section('Education',d.education)}
  ${skills?`<section class="section"><h2>My Skills</h2><div class="skill-list">${skills}</div></section>`:''}
  ${section('Projects',d.projects)}
  ${section('Work Experience',d.experience)}
  ${links?`<section class="section"><h2>Find Me Online</h2><div class="links">${links}</div></section>`:''}
  ${section('Additional Information',d.extra)}
 </div>`;

 const common=`
 *{box-sizing:border-box}
 body{margin:0;font:16px/1.7 Arial,sans-serif;overflow-wrap:anywhere}
 .portfolio{max-width:1110px;margin:0 auto 40px;min-height:100vh;padding:0 46px 36px}
 .profile-hero{display:grid;grid-template-columns:140px minmax(0,1fr);align-items:center;gap:28px;padding:34px 26px;margin:8px 0 26px;border-radius:24px}
 .photo-wrap{display:flex;justify-content:center;align-items:center}
 .avatar{display:block;width:132px;height:132px;object-fit:cover;border-radius:50%;background:#e9e3f5;border:5px solid rgba(255,255,255,.8);box-shadow:0 0 0 5px rgba(177,105,230,.25)}
 .placeholder{display:grid;place-items:center;font-size:52px;font-weight:700}
 .profile-info{min-width:0}
 .eyebrow{font-size:11px;letter-spacing:3px;font-weight:700;opacity:.75;margin-bottom:8px}
 .profile-info h1{font-size:clamp(30px,4vw,43px);line-height:1.15;overflow-wrap:anywhere;margin:0 0 9px}
 .job{font-size:18px;font-weight:700;margin-bottom:8px}
 .about{margin:10px 0 14px;max-width:700px}
 .contact{font-size:14px;line-height:1.8;overflow-wrap:anywhere}
 .bodycontent{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:16px}
 .section{margin:0;min-width:0;border-radius:22px;padding:25px 24px;overflow-wrap:anywhere}
 .section h2{font-size:24px;line-height:1.2;margin:0 0 20px}
 .section p{margin:0;white-space:pre-wrap}
 .skill-list,.links{display:flex;flex-wrap:wrap;gap:9px}
 .pill{display:inline-block;padding:6px 12px;font-size:13px}
 .social-link{overflow-wrap:anywhere}
 @media(max-width:760px){
  .portfolio{padding:0 18px 25px}
  .bodycontent{grid-template-columns:1fr}
  .profile-hero{grid-template-columns:1fr;text-align:center;gap:18px;padding:28px 18px}
  .avatar{width:120px;height:120px}
  .section{padding:22px}
 }
 `;

 const styles={
 simple:`
 body{color:#302044;background:#f7f5fc}
 .portfolio{background:#fff}
 .profile-hero{color:#302044;background:#fff;border:1px solid #e9e3f5;border-bottom:3px solid #7654d6}
 .avatar{border-color:#fff;box-shadow:0 0 0 4px #eee7fb}
 .placeholder{background:#f0eaff;color:#7654d6}
 .eyebrow,.job{color:#7654d6}
 .contact{color:#756d86}
 .section{background:#fff;border:1px solid #e9e3f5;box-shadow:0 5px 18px #20103a0c}
 .section h2{color:#6734a9}
 .pill{background:#eee4ff;color:#6734a9;border-radius:20px}
 .social-link{color:#7654d6}
 `,
 modern:`
 body{color:#f8f6ff;background:#211936}
 .portfolio{background:linear-gradient(135deg,#211936,#30204a)}
 .profile-hero{color:#fff;background:#171126;border:1px solid #554474;border-bottom:4px solid #a994ff}
 .avatar{border-radius:18px;border-color:#554474;box-shadow:none}
 .placeholder{background:#3b3154;color:#c9baff}
 .eyebrow,.job{color:#bba9ff}
 .contact{color:#d7cfea}
 .section{background:#2e2540;color:#f8f6ff;border:1px solid #4a3b61}
 .section h2{color:#c4adff}
 .pill{background:#3b3154;color:#e6dcff;border-radius:8px}
 .social-link{color:#c9baff}
 `,
 creative:`
 body{color:#302044;background:#f7f5fc}
 .portfolio{background:linear-gradient(135deg,#281347,#5a238b 62%,#7c26a7)}
 .profile-hero{color:#fff;background:linear-gradient(115deg,#24133e,#56218a 68%,#8c28b5);border:1px solid #ffffff40;box-shadow:0 8px 28px #160a2518}
 .avatar{border:5px solid #fff;box-shadow:0 0 0 5px #c84ee766}
 .placeholder{background:#eee4ff;color:#7654d6}
 .eyebrow,.job{color:#e9c9ff}
 .contact{color:#eee4fa}
 .section{background:#fbf9ff;box-shadow:0 6px 18px #160a2520}
 .section h2{color:#6734a9}
 .pill{background:#e9e5ff;color:#6734a9;border-radius:20px}
 .section:nth-child(even){border-left:4px solid #d65ad8}
 .social-link{color:#7654d6}
 `
 };

 const selectedStyle=styles[d.template]||styles.simple;
 const w=window.open('','_blank');

 if(!w){
  notify('Your browser blocked the new tab. Allow pop-ups for this site, then try again.');
  return;
 }

 w.document.open();
 w.document.write(`<!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width,initial-scale=1">
 <title>${safe(d.name)} | Creatique Portfolio</title>
 <style>${common}${selectedStyle}</style>
 </head>
 <body><article class="portfolio">${content}</article></body>
 </html>`);
 w.document.close();
 notify('Portfolio generated in a new tab using the '+d.template+' template.');
}

$('portfolioForm').addEventListener('submit',e=>{
 e.preventDefault();
 try{
  localStorage.setItem('creatique_portfolio_v1',JSON.stringify(getData()));
  notify('Your information has been saved in this browser.');
 }catch(error){
  notify('Unable to save. Try a smaller profile picture.');
 }
});

$('generateBtn').addEventListener('click',()=>{
 if(!$('portfolioForm').reportValidity())return;
 const d=getData();
 try{
  localStorage.setItem('creatique_portfolio_v1',JSON.stringify(d));
 }catch(error){
  notify('Unable to save. Try a smaller profile picture.');
  return;
 }
 generate(d);
});

$('photo').addEventListener('change',e=>{
 const file=e.target.files[0];
 if(!file){photoData='';return;}
 if(!file.type.startsWith('image/')){
  notify('Please choose an image file.');
  e.target.value='';
  return;
 }
 if(file.size>3*1024*1024){
  notify('Choose a profile picture smaller than 3 MB.');
  e.target.value='';
  return;
 }
 const reader=new FileReader();
 reader.onload=()=>{photoData=reader.result;notify('Profile picture selected.');};
 reader.readAsDataURL(file);
});

$('clearBtn').addEventListener('click',()=>{
 if(!confirm('Clear all portfolio details?'))return;
 $('portfolioForm').reset();
 photoData='';
 try{localStorage.removeItem('creatique_portfolio_v1');}catch(error){}
 $('notice').style.display='none';
});

try{
 const saved=localStorage.getItem('creatique_portfolio_v1');
 if(saved){
  const d=JSON.parse(saved);
  ids.forEach(id=>{
   if(typeof d[id]==='string')$(id).value=d[id];
  });
  photoData=d.photo||'';
  const choice=document.querySelector(`input[name="template"][value="${d.template||'simple'}"]`);
  if(choice)choice.checked=true;
 }
}catch(error){}
</script>
</body>
</html>
