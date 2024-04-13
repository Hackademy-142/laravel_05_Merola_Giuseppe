

fetch('http://localhost:8000/api/manga/category').then(response =>response.json()).then(data => {

    const wrapper = document.querySelector('#wrapper');

    data.forEach( el => {
        let colonna = document.createElement('div');
        colonna.classList.add('col-12' , 'col-md-4', 'my-2');
        let a = document.createElement('a');
        a.classList.add('btn' , 'btn-primary');
        a.textContent = el.name;

        colonna.appendChild(a);
        wrapper.appendChild(colonna);
    });



})