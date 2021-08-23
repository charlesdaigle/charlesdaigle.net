var options = {
    // vertical offset in px before element is first unpinned
    offset : 0,
    // or you can specify offset individually for up/down scroll
    offset: {
        up: 100,
        down: 50
    },
    // or you can specify tolerance individually for up/down scroll
    tolerance : {
        up : 20,
        down : 5
    }
};

let header = document.querySelector('header');

// pass options as the second argument to the constructor
// supplied options are merged with defaults
let headroom = new Headroom(header, options);
headroom.init();