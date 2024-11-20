function showSubjectInfo(subjectId) {
    const subjectButton = document.querySelector(`.subject-button[onclick="showSubjectInfo('${subjectId}')"]`);
    if (!subjectButton) return;

    const semester = subjectButton.closest('.semester');
    if (!semester) return;

    // Restaurar todos los semestres excepto el seleccionado
    document.querySelectorAll('.semester').forEach(otherSemester => {
        if (otherSemester !== semester) {
            restoreSemester(otherSemester); // Restaura los semestres previos
        }
    });

    // Ocultar cualquier información activa
    document.querySelectorAll('.subject-info').forEach(info => {
        info.classList.remove('active');
        info.style.display = 'none'; // Asegura que no ocupe espacio
    });

    const title = semester.querySelector('.title');
    const buttons = semester.querySelectorAll('.subject-button');

    // Animar el título y botones del semestre actual
    if (title) title.classList.add('slide-up');
    buttons.forEach(button => button.classList.add('slide-up'));

    // Esperar la animación antes de ocultar el contenido
    setTimeout(() => {
        if (title) {
            title.classList.add('hidden-content');
            title.style.display = 'none'; // Remueve completamente del flujo
        }
        buttons.forEach(button => {
            button.classList.add('hidden-content');
            button.style.display = 'none'; // Remueve completamente del flujo
        });

        // Reducir la altura del contenedor del semestre actual
        semester.classList.add('minimized');

        // Mostrar la información de la materia seleccionada
        const subjectInfo = document.getElementById(subjectId);
        if (subjectInfo) {
            subjectInfo.style.display = 'block'; // Asegura que sea visible
            subjectInfo.classList.add('active');
        }
    }, 500); // Duración de la animación
}

function restoreSemester(semester) {
    const title = semester.querySelector('.title');
    const buttons = semester.querySelectorAll('.subject-button');

    // Restaurar el título y botones del semestre
    if (title) {
        title.classList.remove('slide-up', 'hidden-content');
        title.style.display = 'block';
    }
    buttons.forEach(button => {
        button.classList.remove('slide-up', 'hidden-content');
        button.style.display = 'inline-block';
    });

    // Restaurar la altura del contenedor
    semester.classList.remove('minimized');
}

function showAllSubjects() {
    const semesters = document.querySelectorAll('.semester');

    semesters.forEach(semester => restoreSemester(semester));

    // Ocultar toda la información de materias
    document.querySelectorAll('.subject-info').forEach(info => {
        info.classList.remove('active');
        info.style.display = 'none'; // Elimina cualquier espacio
    });
}
