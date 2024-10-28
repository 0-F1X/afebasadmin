particlesJS('particles-js', {
    particles: {
        number: {
            value: 50,
            density: {
                enable: true,
                value_area: 500 
            }
        },
        color: {
            value: '#343a40'
        },
        shape: {
            type: 'triangle', 
        },
        opacity: {
            value: 0.5, 
        },
        size: {
            value: 3, 
        },
        line_linked: {
            enable: true,
            distance: 150,
            color: '#808080',
            opacity: 0.4,
            width: 1
        }
    },
    interactivity: {
        detect_on: 'canvas',
        events: {
            onhover: {
                enable: true,
                mode: 'repulse' // Action au survol de la souris
            },
            onclick: {
                enable: true,
                mode: 'push' // Action au clic de la souris
            }
        }
    },
    retina_detect: true
});
