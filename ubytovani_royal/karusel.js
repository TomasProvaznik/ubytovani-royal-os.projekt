
document.addEventListener('DOMContentLoaded', function () {
    const track = document.querySelector('.carousel-track');
    let slides = Array.from(track.children);
    const nextButton = document.querySelector('.arrow.right');
    const prevButton = document.querySelector('.arrow.left');

    const slideWidth = slides[0].getBoundingClientRect().width;
    const cloneCount = 3; 

    const firstClones = slides.slice(0, cloneCount).map(slide => {
        const clone = slide.cloneNode(true);
        clone.classList.add('clone');
        return clone;
    });

    const lastClones = slides.slice(-cloneCount).map(slide => {
        const clone = slide.cloneNode(true);
        clone.classList.add('clone');
        return clone;
    });

    firstClones.forEach(clone => track.appendChild(clone));
    lastClones.reverse().forEach(clone => track.insertBefore(clone, slides[0]));

    slides = Array.from(track.children);

    const setSlidePosition = (slide, index) => {
        slide.style.left = slideWidth * index + 'px';
    };
    slides.forEach(setSlidePosition);

    let currentIndex = cloneCount;
    track.style.transform = 'translateX(-' + slideWidth * currentIndex + 'px)';
    slides[currentIndex].classList.add('current-slide');

    const moveToSlide = (index) => {
        track.style.transition = 'transform 0.4s ease-in-out';
        track.style.transform = 'translateX(-' + slideWidth * index + 'px)';
        slides.forEach(slide => slide.classList.remove('current-slide'));
        slides[index].classList.add('current-slide');
        currentIndex = index;
    };

    nextButton.addEventListener('click', () => {
        if (currentIndex >= slides.length - 1) return;
        moveToSlide(currentIndex + 1);
    });

    prevButton.addEventListener('click', () => {
        if (currentIndex <= 0) return;
        moveToSlide(currentIndex - 1);
    });

    track.addEventListener('transitionend', () => {
        if (slides[currentIndex].classList.contains('clone')) {
            track.style.transition = 'none';

            if (currentIndex >= slides.length - cloneCount) {
                currentIndex = cloneCount;
            } else if (currentIndex < cloneCount) {
                currentIndex = slides.length - cloneCount * 2;
            }

            track.style.transform = 'translateX(-' + slideWidth * currentIndex + 'px)';
            slides.forEach(slide => slide.classList.remove('current-slide'));
            slides[currentIndex].classList.add('current-slide');
        }
    });
});
