
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Creatique | Portfolio Builder</title>
<style>
:root{--ink:#211936;--muted:#756d86;--purple:#7654d6;--line:#e9e3f5;--bg:#f7f5fc}
*{box-sizing:border-box}
body{margin:0;background:var(--bg);color:var(--ink);font:15px/1.6 Arial,sans-serif}
header{background:#fff;border-bottom:1px solid var(--line);padding:17px max(22px,calc((100% - 900px)/2));display:flex;align-items:center;justify-content:space-between;gap:18px}
header strong{font-size:23px;color:var(--purple)}
header span{color:var(--muted)}
main{max-width:900px;margin:28px auto;padding:0 20px}
.intro{margin-bottom:22px}
.intro h1{font-size:clamp(26px,4vw,36px);margin:0 0 5px}
.intro p{color:var(--muted);margin:0}
.panel{background:#fff;border:1px solid var(--line);border-radius:18px;padding:24px;box-shadow:0 8px 28px #2b17400a}
.panel h2{font-size:19px;margin:0 0 16px}
.field{margin-bottom:14px}
.field label{display:block;font-weight:700;font-size:13px;margin-bottom:5px}
.field input,.field textarea{width:100%;padding:11px;border:1px solid #ded7eb;border-radius:9px;font:inherit;background:#fff;color:var(--ink)}
.field textarea{min-height:76px;resize:vertical}
.grid2{display:grid;grid-template-columns:1fr 1fr;gap:12px}
.templates{display:grid;grid-template-columns:repeat(3,1fr);gap:12px;margin-bottom:20px}
.template{cursor:pointer;border:1px solid var(--line);border-radius:12px;padding:15px 10px;text-align:center;background:#fff}
.template input{accent-color:var(--purple)}
.template b{display:block;margin-top:5px}
.template small{color:var(--muted)}
.template:has(input:checked){border-color:var(--purple);background:#f6f1ff;box-shadow:0 0 0 2px #7654d61a}
.actions{display:flex;flex-wrap:wrap;gap:10px}
.btn{border:0;border-radius:10px;padding:12px 17px;background:var(--purple);color:#fff;font-weight:700;cursor:pointer}
.btn.secondary{background:#eee8fa;color:#4d388b}
.btn:hover{filter:brightness(.96)}
.notice{display:none;margin-top:15px;padding:12px;border-radius:10px;background:#f0eaff;color:#4d388b}
footer{text-align:center;color:#9289a2;font-size:12px;padding:20px}
@media(max-width:600px){header{padding:15px 20px}.grid2,.templates{grid-template-columns:1fr}.panel{padding:17px}header span{font-size:12px}}

</style>
</head>
<body>
<header><strong>Creatique.</strong><span>Build a portfolio that feels like you.</span></header>
<main>
<div class="intro">
<h1>Create your portfolio</h1>
<p>Enter your information, save it, choose a template, and generate your portfolio.</p>
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
<button class="btn" type="submit">Save information</button>
<button class="btn" type="button" id="generateBtn">Generate portfolio</button>
<button class="btn secondary" type="button" id="clearBtn">Clear form</button>
</div>
<div id="notice" class="notice" role="status"></div>
</form>
</section>
</main>
<footer>Creatique · Your story, beautifully presented.</footer>

<script>
const ids=['name','job','email','phone','address','about','education','skills','projects','experience','links','extra'];
const $=id=>document.getElementById(id);
let photoData='',savedData=null;

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
function save(){
 if(!$('portfolioForm').reportValidity())return false;
 const d=getData();
 try{
  localStorage.setItem('creatique_portfolio_v1',JSON.stringify(d));
  savedData=d;
  notify('Your information has been saved successfully.');
  return true;
 }catch(e){
  notify('Unable to save. Please try a smaller profile picture.');
  return false;
 }
}
function safe(s=''){
 return String(s).replace(/[&<>"']/g,c=>({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[c]));
}
function section(title,value){
 if(!value)return '';
 return `<section class="section"><h2>${safe(title)}</h2><p>${safe(value).replace(/\n/g,'<br>')}</p></section>`;
}
function generate(d){
 const skills=d.skills?d.skills.split(',').map(s=>s.trim()).filter(Boolean).map(s=>`<span class="pill">${safe(s)}</span>`).join(''):'';
 const links=d.links?d.links.split(/\n/).map(s=>s.trim()).filter(Boolean).map(s=>{
  const url=/^https?:\/\//i.test(s)?s:'https://'+s;
  return `<a class="social-link" href="${safe(url)}" target="_blank" rel="noopener">${safe(s)}</a>`;
 }).join(''):'';

 const content=`
 <header class="profile-hero">
  <div class="photo-wrap">
   ${d.photo?`<img class="avatar" src="${d.photo}" alt="Profile picture">`:`<div class="avatar placeholder">${safe(d.name.charAt(0)||'Y')}</div>`}
  </div>
  <div class="profile-info">
   <div class="eyebrow">PORTFOLIO</div>
   <h1>${safe(d.name)||'Your Name'}</h1>
   <div class="job">${safe(d.job)||'Professional'}</div>
   ${d.about?`<p class="about">${safe(d.about)}</p>`:''}
   <div class="contact">${[d.email,d.phone,d.address].filter(Boolean).map(safe).join(' <span>·</span> ')}</div>
  </div>
 </header>
 <div class="bodycontent">
  ${section('Education',d.education)}
  ${skills?`<section class="section"><h2>Skills</h2><div class="skill-list">${skills}</div></section>`:''}
  ${section('Projects',d.projects)}
  ${section('Work experience',d.experience)}
  ${links?`<section class="section"><h2>Find me online</h2><div class="links">${links}</div></section>`:''}
  ${section('Additional information',d.extra)}
 </div>`;

 const common=`
 *{box-sizing:border-box}
 body{margin:0;font:16px/1.7 Arial,sans-serif;overflow-wrap:anywhere}
 .portfolio{max-width:960px;margin:36px auto;background:inherit;min-height:80vh}
 .profile-hero{display:grid;grid-template-columns:180px minmax(0,1fr);align-items:center;gap:36px;padding:46px 52px}
 .photo-wrap{display:flex;justify-content:center;align-items:center}
 .avatar{display:block;width:164px;height:164px;object-fit:cover;border-radius:50%;background:#e9e3f5}
 .placeholder{display:grid;place-items:center;font-size:58px;font-weight:700;color:#7654d6}
 .profile-info{min-width:0}
 .eyebrow{font-size:11px;letter-spacing:3px;font-weight:700;opacity:.7;margin-bottom:8px}
 .profile-info h1{font-size:clamp(30px,4vw,43px);line-height:1.15;overflow-wrap:anywhere;margin:0 0 9px}
 .job{font-size:18px;font-weight:700;margin-bottom:12px}
 .about{white-space:pre-wrap;margin:0 0 14px;max-width:600px}
 .contact{font-size:13px;line-height:1.8;overflow-wrap:anywhere}
 .contact span{padding:0 5px;opacity:.65}
 .bodycontent{padding:30px 52px 48px}
 .section{margin:0 0 30px;min-width:0}
 .section h2{font-size:14px;text-transform:uppercase;letter-spacing:1.8px;margin:0 0 12px}
 .section p{margin:0;white-space:pre-wrap}
 .skill-list{display:flex;flex-wrap:wrap;gap:8px}
 .pill{display:inline-block;padding:6px 12px;font-size:13px}
 .links{display:flex;flex-wrap:wrap;gap:10px}
 .social-link{display:inline-block;overflow-wrap:anywhere}
 @media(max-width:620px){
  .portfolio{margin:0;min-height:100vh}
  .profile-hero{grid-template-columns:1fr;text-align:center;gap:18px;padding:32px 22px}
  .avatar{width:130px;height:130px}
  .profile-info h1{font-size:32px}
  .about{margin-left:auto;margin-right:auto}
  .bodycontent{padding:28px 24px}
  .contact{font-size:12px}
 }
 `;

 const styles={
 simple:`
 body{color:#28213a;background:#fff}
 .profile-hero{border-bottom:1px solid #e6e0ef}
 .avatar{border-radius:50%}
 .job,.section h2{color:#7654d6}
 .pill{background:#f0eaff;border-radius:20px}
 .social-link{color:#7654d6}
 `,
 modern:`
 body{color:#f8f6ff;background:#211936}
 .profile-hero{background:#211936;border-bottom:4px solid #a994ff}
 .avatar{border-radius:18px;border:3px solid #554474}
 .placeholder{background:#3b3154}
 .eyebrow,.job,.section h2{color:#bba9ff}
 .contact{color:#d7cfea}
 .pill{background:#3b3154;border-radius:8px}
 .social-link{color:#c9baff}
 `,
 creative:`
 body{color:#302044;background:#fff8fc}
 .profile-hero{background:linear-gradient(125deg,#fbe8f1,#e9e5ff 60%,#dcf7f1);border-bottom:5px solid #7654d6}
 .avatar{border-radius:25px;border:4px solid #fff;box-shadow:0 8px 24px #38204c18}
 .eyebrow,.job,.section h2{color:#7654d6}
 .pill{background:#e9e5ff;border-radius:20px}
 .section{padding-left:16px;border-left:3px solid #ded3ff}
 .social-link{color:#7654d6}
 `
 };

 const w=window.open('','_blank');
 if(!w){
  notify('Your browser blocked the new tab. Allow pop-ups for this site, then try again.');
  return;
 }
 w.document.open();
 w.document.write(`<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>${safe(d.name)} | Portfolio</title><style>${common}${styles[d.template]||styles.simple}</style></head><body><article class="portfolio ${safe(d.template)}">${content}</article></body></html>`);
 w.document.close();
 notify('Your portfolio has been generated in a new tab.');
}

$('portfolioForm').addEventListener('submit',e=>{
 e.preventDefault();
 save();
});
$('generateBtn').addEventListener('click',()=>{
 if(!$('portfolioForm').reportValidity())return;
 const latest=getData();
 try{
  localStorage.setItem('creatique_portfolio_v1',JSON.stringify(latest));
  savedData=latest;
 }catch(e){
  notify('Unable to save. Please try a smaller profile picture.');
  return;
 }
 generate(latest);
});
$('photo').addEventListener('change',e=>{
 const file=e.target.files[0];
 if(!file){photoData='';return}
 if(!file.type.startsWith('image/')){
  notify('Please choose an image file.');
  return;
 }
 if(file.size>3*1024*1024){
  notify('Please choose a profile picture smaller than 3 MB.');
  e.target.value='';
  return;
 }
 const reader=new FileReader();
 reader.onload=()=>{
  photoData=reader.result;
  notify('Profile picture selected. Save or generate your portfolio to keep it.');
 };
 reader.readAsDataURL(file);
});
document.querySelectorAll('input[name="template"]').forEach(el=>el.addEventListener('change',()=>{
 notify('Template selected: '+el.value+'.');
}));
$('clearBtn').addEventListener('click',()=>{
 if(!confirm('Clear all portfolio details?'))return;
 $('portfolioForm').reset();
 photoData='';
 savedData=null;
 try{localStorage.removeItem('creatique_portfolio_v1')}catch(e){}
 $('notice').style.display='none';
});
try{
 const saved=localStorage.getItem('creatique_portfolio_v1');
 if(saved){
  const d=JSON.parse(saved);
  ids.forEach(id=>{if(typeof d[id]==='string')$(id).value=d[id]});
  photoData=d.photo||'';
  const choice=document.querySelector(`input[name="template"][value="${d.template||'simple'}"]`);
  if(choice)choice.checked=true;
  savedData=d;
 }
}catch(e){}
</script>
</body>
</html>