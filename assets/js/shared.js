console.log("shared-1")
document.getElementById('prep-1').addEventListener('click',()=>{
    console.log('prep-1')
    document.getElementById('title').innerHTML="أولى إعدادى عربى";
    console.log('prep-1')
})
document.getElementById('prep-2').addEventListener('click',()=>{
	document.getElementById('title').innerHTML="ثانية إعدادى عربى";
})
document.getElementById('prep-3').addEventListener('click',()=>{
	document.getElementById('title').innerHTML="ثالثه إعدادى عربى";
})
console.log("shared")