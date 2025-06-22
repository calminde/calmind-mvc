<link rel="stylesheet" href="./css/login.css">
<img class="calmind_logo" src="./images/logo.png">

<form 
  id="login_form" 
  name="login_form" 
  method="post"
  enctype="application/x-www-form-urlencoded"
  onsubmit="javascript:stripspaces(this)"
>
  <input 
    type="text"  
    id="username" 
    class="username"
    name="username" 
    size="20" 
    autocapitalize="off"
    autocorrect="off" 
    autocomplete="on"  
    autofocus="on"
    required 
  />
  <label for="username">Seu Email:</label> 
  <small>Email</small>  
  <svg viewBox="0 0 10 10">
    <use xlink:href="#user" /> 
    <use xlink:href="#fed" class="fedora" /> 
    <use xlink:href="#burst" class="flash" />
  </svg>

  <input 
    id="password" 
    type="password" 
    name="password"
    autocorrect="off" 
    autocomplete="off"
    autocomplete="new-password"
    required 
  />
  <label for="password">Sua senha:</label> 
  <svg viewBox="0 0 10 10">
    <use xlink:href="#pad" />
    <use class="flash" xlink:href="#burst" />
    <use class="lock" xlink:href="#lock" />
  </svg>

  <button id="submit" type="submit" name="submit">Entrar</button>

  <svg xmlns="http://www.w3.org/2000/svg" class="hbox" viewBox="0 0 200 40">
    <rect x=".5" y=".5" ry="3" rx="3" width="199" height="42" />
  </svg>
</form>

<!-- SVG defs escondidos -->
<svg class="hide">
  <defs>
    <g id="padlock">
      <path id="pad" d="m 3,5.5 5,0 0,4 -5,0 z" />
      <path id="lock" d="m 3,5.5 0,-2 c 0,-3 4,-3 4,-0.25 L 7,4 " />
    </g>
    <path id="fed" d="M7.8 3.8c-.7.6-3.5.6-4.4-.1-.3-.2 4.8-.2 4.4.1zM7 3.5c-.4-.7-.3-2-1.5-1.5-1-.5-1 .7-1.5 1.5" />
    <path id="user" d="M5.5 5.8c-2 0-2-3 0-3 2.3 0 2 3 0 3zm.8-.3c1.2 0 2.2 1 2.2 2.3v1.7h-6V7.7c0-1.2 1-2.2 2.3-2.2" />
    <path id="burst" d="m 5.47,0 v 2.19 m 4.38,2.19 h -2.2 m -6.55,0 H 3.28 M 2.38,1.28 3.92,2.83 M 8.56,1.28 7.02,2.83" />
  </defs>
</svg>
