// hide modal on click of x
const hideModal = document.getElementById("hide-modal");
const modalBackground = document.getElementById("modal-background");

hideModal.addEventListener("click", function hideModalHandler() {
    modalBackground.className = "hide";
});

// pannellum

pannellum.viewer("panorama", {
    type: "equirectangular",
    panorama: "../images/panorama.jpg",
    // auto load image so no added step
    autoLoad: true,
    // simple title in corner
    title: "streamGo test",
    author: "Wayne Fox",

    // for debugging and gettin yaw and pitch
    // hotSpotDebug: true,
    hotSpots: [
        {
            pitch: -11.77,
            yaw: 0.05,
            type: "info",
            text: "Accreditation Info",
        },
        {
            pitch: -10.99,
            yaw: 60.24,
            type: "info",
            text: "Live Event",
        },
        {
            pitch: -11.27,
            yaw: 120.05,
            type: "info",
            text: "Agenda",
        },
        {
            pitch: -10.99,
            yaw: 179.65,
            type: "info",
            text: "Sponsor Hall",
        },
        {
            pitch: -12.17,
            yaw: -119.73,
            type: "info",
            text: "Conference Handout",
        },
        {
            pitch: -11.25,
            yaw: -59.73,
            type: "info",
            text: "The Speakers",
        },
    ],
});
