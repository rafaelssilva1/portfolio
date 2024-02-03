class Works {
    constructor() {
        this.worksDetailsItem = document.querySelectorAll('.works__details-item');
        this.worksImageItem = document.querySelectorAll('.works__image-item');
        this.events();
    }

    events() {
        this.worksDetailsItem.forEach(item => item.addEventListener('mouseover', (e) => {
            this.hover({ id: e.target.getAttribute('data-id') })
        }))
    }

    hover({ id }) {
        this.worksImageItem.forEach(img => {
            const imgId = img.getAttribute('data-id');
            if (imgId === id) {
                img.classList.add('opacity');
            } else {
                img.classList.remove('opacity');
            }
        })
    }
}

const works = new Works();
