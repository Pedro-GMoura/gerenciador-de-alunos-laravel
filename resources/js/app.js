import "./bootstrap";

window.confirmDelete = function (id) {
    Swal.fire({
        title: "Tem certeza?",
        icon: "warning",
        text: "Esta ação não poderá ser desfeita!",
        showCancelButton: true,
        confirmButtonColor: "#dd3333",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Sim, deletar!",
        cancelButtonText: "Cancelar",
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById("delete-form-" + id).submit();
        }
    });
};
