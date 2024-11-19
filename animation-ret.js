function showSubjectInfo(subjectId) {
    // Encuentra el botón específico de la materia seleccionada
    const subjectButton = document.querySelector(`.subject-button[onclick="showSubjectInfo('${subjectId}')"]`);
    if (!subjectButton) return; // Si no encuentra el botón, se detiene

    // Encuentra el semestre específico al que pertenece el botón de materia seleccionado
    const semester = subjectButton.closest('.semester');
    if (!semester) return;

    // Restaura todos los semestres antes de aplicar la animación al semestre actual
    document.querySelectorAll('.semester').forEach(otherSemester => {
        if (otherSemester !== semester) {
            const title = otherSemester.querySelector('.title');
            const buttons = otherSemester.querySelectorAll('.subject-button');

            // Muestra nuevamente el título y los botones
            if (title) {
                title.classList.remove('hidden', 'slide-up');
            }
            buttons.forEach(button => {
                button.classList.remove('hidden', 'slide-up');
                button.style.visibility = 'visible'; // Restaura visibilidad de los botones
            });
        }
    });

    const title = semester.querySelector('.title');
    const buttons = semester.querySelectorAll('.subject-button');

    // Añade la clase 'slide-up' solo al título y al botón seleccionado
    if (title) {
        title.classList.add('slide-up');
    }
    buttons.forEach(button => {
        if (button !== subjectButton) {
            button.style.visibility = 'hidden'; // Oculta los otros botones del mismo semestre sin animación
        } else {
            button.classList.add('slide-up'); // Solo el botón seleccionado tiene animación
        }
    });

    // Oculta todos los contenedores de información de materias
    document.querySelectorAll('.subject-info').forEach(info => {
        info.classList.remove('active');
    });

    // Después de que termine la animación, añade la clase 'hidden' solo al título y botón seleccionados
    setTimeout(() => {
        if (title) {
            title.classList.add('hidden');
        }
        subjectButton.classList.add('hidden'); // Oculta solo el botón seleccionado

        // Muestra el contenedor de la materia seleccionada después de ocultar el botón
        const subjectInfo = document.getElementById(subjectId);
        if (subjectInfo) {
            subjectInfo.classList.add('active');
        }
    }, 500); // Duración de la animación
}

function showAllSubjects() {
    // Encuentra todos los contenedores de semestre
    const semesters = document.querySelectorAll('.semester');

    // Restaura el título y botones en cada semestre
    semesters.forEach(semester => {
        const title = semester.querySelector('.title');
        const buttons = semester.querySelectorAll('.subject-button');

        // Muestra nuevamente el título y los botones
        if (title) {
            title.classList.remove('hidden', 'slide-up');
        }
        buttons.forEach(button => {
            button.classList.remove('hidden', 'slide-up');
            button.style.visibility = 'visible'; // Restaura visibilidad de los botones
        });
    });

    // Oculta todos los contenedores de información de materias
    document.querySelectorAll('.subject-info').forEach(info => {
        info.classList.remove('active');
    });
}

