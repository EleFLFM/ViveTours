function showAlert(message, type = 'success') {
    const alertPlaceholder = document.getElementById('alertPlaceholder');
    const wrapper = document.createElement('div');
    wrapper.innerHTML = `
        <div class="alert alert-${type} alert-dismissible fade show" role="alert" style="
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        ">
            <div style="display: flex; align-items: center;">
                <i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'}" style="margin-right: 10px;"></i>
                <div>${message}</div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    `;
    alertPlaceholder.innerHTML = ''; // Clear previous alerts
    alertPlaceholder.append(wrapper);

    // Auto-cerrar la alerta después de 5 segundos
    setTimeout(() => {
        const alert = wrapper.firstElementChild;
        if (alert) {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        }
    }, 5000);
}

document.addEventListener('DOMContentLoaded', function() {
    // Configurar los botones de eliminación
    const deleteBtns = document.querySelectorAll('.delete-btn');
    deleteBtns.forEach(btn => {
        btn.addEventListener('click', function(event) {
            event.preventDefault();
            const form = this.closest('form');
           
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡No podrás recuperar esto después de eliminarlo!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminarlo',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });

    // Mostrar alerta de éxito si existe en la URL
    const urlParams = new URLSearchParams(window.location.search);
    const successMessage = urlParams.get('success');
    if (successMessage) {
        showAlert(successMessage, 'success');
    }

    // Mostrar alerta de sesión si existe (asumiendo que se pasa desde PHP)
    if (typeof sessionSuccessMessage !== 'undefined' && sessionSuccessMessage) {
        showAlert(sessionSuccessMessage, 'success');
    }
});