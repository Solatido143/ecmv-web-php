(function () {
    var particlesElement = document.getElementById("particles-js");
    if (particlesElement) {
        particlesJS("particles-js", {
            particles: {
                number: {
                    value: 100,
                    density: {
                        enable: true,
                        value_area: 800,
                    },
                },
                color: {
                    value: "#ffffff",
                },
                shape: {
                    type: "circle",
                    stroke: {
                        width: 0,
                        color: "#000000",
                    },
                    polygon: {
                        nb_sides: 5,
                    },
                    image: {
                        src: "img/github.svg",
                        width: 100,
                        height: 100,
                    },
                },
                opacity: {
                    value: 0.5,
                    random: false,
                    anim: {
                        enable: false,
                        speed: 1,
                        opacity_min: 0.1,
                        sync: false,
                    },
                },
                size: {
                    value: 3,
                    random: true,
                    anim: {
                        enable: false,
                        speed: 40,
                        size_min: 0.1,
                        sync: false,
                    },
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: "#ff1414",
                    opacity: 0.4,
                    width: 1,
                },
                move: {
                    enable: true,
                    speed: 3,
                    direction: "none",
                    random: false,
                    straight: false,
                    out_mode: "bounce",
                    bounce: false,
                    attract: {
                        enable: true,
                        rotateX: 600,
                        rotateY: 1200,
                    },
                },
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                    onhover: {
                        enable: true,
                        mode: "grab",
                    },
                    onclick: {
                        enable: true,
                        mode: "repulse",
                    },
                    resize: true,
                },
                modes: {
                    grab: {
                        distance: 200,
                        line_linked: {
                            opacity: 1,
                        },
                    },
                    bubble: {
                        distance: 400,
                        size: 5,
                        duration: 0.25,
                        opacity: 8,
                        speed: 20,
                    },
                    repulse: {
                        distance: 100,
                        duration: 0.4,
                    },
                    push: {
                        particles_nb: 4,
                    },
                    remove: {
                        particles_nb: 2,
                    },
                },
            },
            retina_detect: true,
        });
    }
}).call(this);