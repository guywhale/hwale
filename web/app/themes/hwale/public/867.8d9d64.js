"use strict";(self.webpackChunksage=self.webpackChunksage||[]).push([[867],{867:function(t,e,o){o.r(e),o.d(e,{default:function(){return c}});class n{constructor(t,e,o){this.text=t,this.container=e,this.speed=o,this.current=0}run(){document.querySelector(this.container).append(this.text[this.current]),this.current++,this.current<this.text.length&&window.setTimeout((()=>{this.run()}),this.speed)}}var r=o(30),c=t=>{const e=[{indent:0,break:!1,spans:[{text:"function ",color:"text-brown"},{text:"makeWebsite",color:"text-grey"},{text:"(",color:"text-red"},{text:"design",color:"text-white"},{text:", ",color:"text-pink"},{text:"developer",color:"text-white"},{text:") {",color:"text-red"}]},{indent:1,break:!1,spans:[{text:"const ",color:"text-brown"},{text:"design ",color:"text-white"},{text:"= ",color:"text-pink"},{text:"designer ",color:"text-white"},{text:"? ",color:"text-pink"},{text:"getDesign",color:"text-grey"},{text:"(",color:"text-red"},{text:"designer",color:"text-white"},{text:") ",color:"text-red"},{text:": null; ",color:"text-pink"}]},{indent:1,break:!1,spans:[{text:"const ",color:"text-brown"},{text:"developer ",color:"text-white"},{text:"= ",color:"text-pink"},{text:"me ",color:"text-white"},{text:"? ",color:"text-pink"},{text:"getDev",color:"text-grey"},{text:"(",color:"text-red"},{text:"me",color:"text-white"},{text:") ",color:"text-red"},{text:": null; ",color:"text-pink"}]},{indent:1,break:!0,spans:[{text:"if ",color:"text-pink"},{text:"(",color:"text-red"},{text:"design ",color:"text-white"},{text:"&& ",color:"text-pink"},{text:"developer",color:"text-white"},{text:") {",color:"text-red"}]},{indent:2,break:!1,spans:[{text:"return ",color:"text-pink"},{text:"code",color:"text-grey"},{text:"(",color:"text-red"},{text:"design ",color:"text-white"},{text:")",color:"text-red"},{text:";",color:"text-pink"}]},{indent:1,break:!1,spans:[{text:"}",color:"text-red"}]},{indent:0,break:!1,spans:[{text:"}",color:"text-red"}]},{indent:0,break:!0,spans:[{text:"makeWebsite",color:"text-grey"},{text:"()",color:"text-red"},{text:";",color:"text-pink"}]}];async function o(){const e=document.querySelectorAll(".line");let o=!1;return document.querySelectorAll(".line .word").forEach((t=>{const e=Array.from(t.childNodes).filter((t=>3===t.nodeType)),o=t.classList[2];for(let t=0;t<e.length;t++){const n=e[t],r=document.createElement("span");r.id=`letter-${t}`,r.classList.add("letter","inline-block","will-change-transform"),r.classList.add(o),n.after(r),r.appendChild(n)}t.replaceWith(...t.childNodes)})),e.forEach((t=>{t.replaceWith(...t.childNodes)})),t.classList.add("opacity-50"),document.querySelector("[data-explode]")?t.classList.remove("opacity-100"):t.classList.remove("opacity-0"),o=!0,new Promise((t=>{t(async function(){const t=document.documentElement.clientWidth,e=-t/2,o=t/2,n=document.documentElement.clientHeight,l=-n/2,i=n/2;let a=100;document.querySelector("[data-explode]")&&(a=2e3),(0,r.Z)({targets:".letter",translateX:()=>r.Z.random(e,o),translateY:()=>r.Z.random(l,i),rotate:()=>r.Z.random(-360,360),scale:()=>`${r.Z.random(80,120)}%`,duration:a,complete:function(t){window.matchMedia("(min-width: 1024px)").matches&&async function(){(0,r.Z)({targets:".letter",translateX:()=>`+=${r.Z.random(-100,100)}px`,translateY:()=>`+=${r.Z.random(-100,100)}px`,rotate:()=>`+=${r.Z.random(-100,100)}`,loop:!0,direction:"alternate",duration:2e4,easing:"linear"})}(),c("#homeText1","#homeText1 .typed-text"),setTimeout((()=>{document.querySelector("#homeText1 .animate-blinking-cursor").remove(),c("#homeText2","#homeText2 .typed-text")}),1300)}})}())}))}async function c(t,e){const o=document.querySelector(t),r=o.getAttribute("data-text"),c=document.createElement("span");c.innerText="_",c.classList.add("animate-blinking-cursor","text-red"),o.appendChild(c),new n(r,e,40).run()}!async function(){for(let o=0;o<e.length;o++){const n=e[o],r=document.createElement("p");if(n.break){const e=document.createElement("br");t.appendChild(e)}if(r.id=`line-${o+1}`,r.classList.add("line","w-auto","my-1.25"),n.indent>0){const t=15*n.indent;r.style.paddingLeft=`${t}px`}t.appendChild(r);const c=n.spans;for(let t=0;t<c.length;t++){const e=c[t],o=document.createElement("span");o.id=`word-${t+1}`,o.classList.add("word","will-change-transform"),o.classList.add(e.color),document.querySelector("[data-explode]")?o.setAttribute("data-text",e.text):[...e.text].forEach((t=>{o.append(t)})),r.appendChild(o)}}const r=document.querySelectorAll(".word");let c=!1;for(let t=0;t<r.length;t++){const e=r[t],l=e.parentElement.id,i=e.id;if(document.querySelector("[data-explode]")){const a=e.getAttribute("data-text"),s=new n(a,`#${l} #${i}`,10);setTimeout((()=>{if(s.run(),t===r.length-1&&(c=!0),c)return new Promise((t=>{t(o())}))}),150*t)}else if(t===r.length-1&&(c=!0),c)return new Promise((t=>{t(o())}))}}()}}}]);