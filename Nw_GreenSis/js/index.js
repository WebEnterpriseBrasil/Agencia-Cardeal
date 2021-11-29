const section = document.querySelectorAll(".home-page section")

const forEach = function (arr, callback) {
	Array.prototype.forEach.call(arr, callback);
};

const resizeBox = () => {
    forEach(section, function (item) {
        const image = item.querySelector('.image');
        const imageHeight = image.clientHeight;
        item.querySelector('.text').style.minHeight = `${imageHeight}px`;
    });
}

window.addEventListener('load', function(event) {
   resizeBox();
});

window.addEventListener('resize', function(event) {
    resizeBox();
});
