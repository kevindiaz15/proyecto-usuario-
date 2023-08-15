function alerta() {
    swal({
        title: "quieres cerrar sesion? ",
        text: "",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal("cerrando sesion", {
            icon: "success",
          });
        } else {
          swal("se ha cancelado la accion");
        }
      });
}