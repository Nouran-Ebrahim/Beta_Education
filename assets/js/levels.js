document.getElementById('thanwy').addEventListener('click',()=>{
	document.getElementById('thawy-content').style.display="block";
    document.getElementById('thawy-content').style.cssText='display: flex; flex-direction: row; justify-content: space-around;width: 100%;'
	document.getElementById('prep-content').style.display="none";
console.log("clicked")

})

document.getElementById('prep').addEventListener('click',()=>{
	document.getElementById('prep-content').style.display="block";
    document.getElementById('prep-content').style.cssText='display: flex; flex-direction: row; justify-content: space-around;width: 100%;'

	document.getElementById('thawy-content').style.display="none";
console.log("clicked-prep")

})