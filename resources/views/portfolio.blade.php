
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
@media(max-width:600px){header{padding:15px 20px}.grid2,.templates{grid-template-columns:1fr}.panel{padding:17px}}
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
let photoData='';
let savedData=null;

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
  notify('Your information has been saved. You can now generate your portfolio.');
  return true;
 }catch(e){
  notify('Unable to save. Your profile picture may be too large; try a smaller image.');
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
  return `<p><a href="${safe(url)}" target="_blank" rel="noopener">${safe(s)}</a></p>`;
 }).join(''):'';

 const content=`
 <div class="hero">
 ${d.photo?`<img class="avatar" src="${d.photo}" alt="Profile picture">`:''}
 <h1>${safe(d.name)||'Your Name'}</h1>
 <div class="job">${safe(d.job)||'Professional'}</div>
 <p>${safe(d.about)}</p>
 <div class="contact">${[d.email,d.phone,d.address].filter(Boolean).map(safe).join(' · ')}</div>
 </div>
 <div class="bodycontent">
 ${section('Education',d.education)}
 ${skills?`<section class="section"><h2>Skills</h2>${skills}</section>`:''}
 ${section('Projects',d.projects)}
 ${section('Work experience',d.experience)}
 ${links?`<section class="section"><h2>Find me online</h2>${links}</section>`:''}
 ${section('Additional information',d.extra)}
 </div>`;

 const styles={
  simple:`body{font:16px/1.6 Arial,sans-serif;color:#28213a;background:#fff}.hero{padding:38px;border-bottom:1px solid #ddd}.bodycontent{padding:30px 38px}.avatar{width:90px;height:90px;object-fit:cover;border-radius:50%}.job{color:#7654d6}.section{margin:22px 0}.section h2{font-size:15px;color:#7654d6;text-transform:uppercase;letter-spacing:1px}.pill{display:inline-block;background:#f0eaff;border-radius:20px;padding:5px 10px;margin:4px}`,
  modern:`body{font:16px/1.6 Arial,sans-serif;color:#fff;background:#211936}.hero{padding:42px;background:#211936;border-bottom:4px solid #a994ff}.bodycontent{padding:30px 38px}.avatar{width:100px;height:100px;object-fit:cover;border-radius:14px}.job,.section h2{color:#a994ff}.section{margin:24px 0}.section h2{text-transform:uppercase;letter-spacing:1px;font-size:15px}.contact{color:#ddd}.pill{display:inline-block;background:#3b3154;border-radius:7px;padding:5px 10px;margin:4px}a{color:#c9baff}`,
  creative:`body{font:16px/1.6 Arial,sans-serif;color:#302044;background:#fff8fc}.hero{padding:38px;background:linear-gradient(125deg,#fbe8f1,#e9e5ff 60%,#dcf7f1);border-bottom:5px solid #7654d6}.bodycontent{padding:30px 38px}.avatar{width:100px;height:100px;object-fit:cover;border-radius:22px;border:4px solid #fff}.job{color:#7654d6;font-weight:bold}.section{padding-left:14px;border-left:3px solid #ded3ff;margin:24px 0}.section h2{color:#7654d6;font-size:15px;text-transform:uppercase;letter-spacing:1px}.pill{display:inline-block;background:#e9e5ff;border-radius:20px;padding:5px 10px;margin:4px}`
 };
 const w=window.open('','_blank');
 if(!w){
  notify('Your browser blocked the portfolio window. Allow pop-ups for this site and try again.');
  return;
 }
 w.document.open();
 w.document.write(`<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>${safe(d.name)} | Portfolio</title><style>*{box-sizing:border-box}body{margin:0}.portfolio{max-width:900px;margin:30px auto;background:inherit;min-height:80vh;overflow-wrap:anywhere}.hero h1{font-size:36px;line-height:1.2;margin:12px 0}.hero p{white-space:pre-wrap}.contact{font-size:13px;margin-top:14px}.bodycontent p{white-space:pre-wrap}.section{margin-bottom:24px}.pill{font-size:13px}a{overflow-wrap:anywhere}@media(max-width:600px){.portfolio{margin:0}.hero,.bodycontent{padding:24px!important}.hero h1{font-size:29px}}</style><style>${styles[d.template]||styles.simple}</style></head><body><article class="portfolio ${safe(d.template)}">${content}</article></body></html>`);
 w.document.close();
 notify('Your portfolio has been generated in a new tab.');
}

$('portfolioForm').addEventListener('submit',e=>{
 e.preventDefault();
 save();
});
$('generateBtn').addEventListener('click',()=>{
 if(!savedData&&!localStorage.getItem('creatique_portfolio_v1')){
  notify('Please save your information first.');
  return;
 }
 const d=getData();
 if(!savedData){
  try{savedData=JSON.parse(localStorage.getItem('creatique_portfolio_v1'))}catch(e){}
 }
 if(!savedData){notify('Please save your information first.');return}
 // Generate using the current selected template and latest form values.
 if(!$('portfolioForm').reportValidity())return;
 const latest=getData();
 try{localStorage.setItem('creatique_portfolio_v1',JSON.stringify(latest));savedData=latest}catch(e){}
 generate(latest);
});
$('photo').addEventListener('change',e=>{
 const file=e.target.files[0];
 if(!file){photoData='';return}
 if(!file.type.startsWith('image/')){notify('Please choose an image file.');return}
 const reader=new FileReader();
 reader.onload=()=>{photoData=reader.result;notify('Profile picture selected. Save your information to keep it.')};
 reader.readAsDataURL(file);
});
document.querySelectorAll('input[name="template"]').forEach(el=>el.addEventListener('change',()=>{
 notify('Template selected: '+el.value+'. Save your information before generating.');
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
