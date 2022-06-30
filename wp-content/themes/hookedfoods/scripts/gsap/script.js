let controller = new ScrollMagic.Controller();
let rotation_animation = gsap.timeline();
rotation_animation.from(".flip1", {
	rotationX: 90
})
.to(".flip1", 5, {
	rotationX: -90
})
rotation_animation.from(".flip2", 5, {
	rotationX: 90
}, "-=5")
.to(".flip2", {
	rotationX: -90
})
.from(".flip3", {
	rotationX: 90
})
.to(".flip3", {
	rotationX: -90
})
.from(".flip4", {
	rotationX: 90
})
.to(".flip4", {
	rotationX: -90
})
.from(".flip5", {
	rotationX: 90
})
.to(".flip5", {
	rotationX: -90
})
.from(".flip6", {
	rotationX: 90
})
.to(".flip6", {
	rotationX: -90
})



let scene = new ScrollMagic.Scene({
	triggerElement: ".flips_wrap",
	duration: "100%",
	triggerHook: 0
}).setTween(rotation_animation).setPin(".flips_wrap").addTo(controller);