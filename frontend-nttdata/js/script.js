//realizamos la solicitud al api

document.addEventListener('DOMContentLoaded', function() {
    const dominio = 'http://localhost:8081/';
    const url = dominio + 'backend-nttdata/obtener-datos?cantidad=10';

    fetch(url)
      .then(response => response.json())
      .then(data => {
        const container = document.getElementById('data-container');
        
        data.results.forEach(user => {
          const userInfo = `
            <div>
              <img src="${user.picture.large}" alt="${user.name.first} ${user.name.last}">
               <p><strong>Género:</strong> ${user.gender}</p>
              <p><strong>Nombre:</strong> ${user.name.title} ${user.name.first} ${user.name.last}</p>
              <p><strong>Ubicación:</strong> ${user.location.city}, ${user.location.state}, ${user.location.country}</p>
              <p><strong>Email:</strong> ${user.email}</p>
              <p><strong>Fecha de nacimiento:</strong> ${user.dob.date}</p>
            </div>
            <hr>
          `;
          container.innerHTML += userInfo;
        });
      })
      .catch(error => {
        console.error('Error:', error);
      });
});

