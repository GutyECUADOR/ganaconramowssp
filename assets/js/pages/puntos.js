class ClientePuntos {
    constructor() {
        this.puntoVenta = '';
        this.nombre = '';
        this.factura = '';
        this.cedula = '';
        this.fecha = '';
        this.valor = 0;
        this.kilos = 0;
      
    }

  }

const app = new Vue({
    el: '#app',
    data: {
      titulo: 'Lista Clientes',
      errors: new ClientePuntos(),
      clientes: [],
      puntosVenta : [],
      clientePuntos: new ClientePuntos()
    },
    methods:{
        getAllClientes(){
            fetch(`./api/index.php?action=getAllClientes`)
            .then(response => {
                return response.json();
            })
            .then(data => {
                console.log('Clientes', data);
                this.clientes = data.data;  
            }).catch( error => {
                console.error(error);
            });  
        },
        submitPuntos(e){
            console.log(this.clientePuntos);
              this.errors = [];
              if (!this.clientePuntos.puntoVenta) {
                this.errors.puntoVenta = {message: 'El punto de venta es obligatorio.', error: true};
              }
              if (!this.clientePuntos.nombre) {
                this.errors.nombre = {message: 'El nombre del punto de venta es obligatorio.', error: true};
              }
              if (!this.clientePuntos.factura) {
                this.errors.factura = {message: 'La factura es obligatorio.', error: true};
              }
              if (!this.clientePuntos.cedula) {
                this.errors.cedula = {message: 'La cédula es obligatoria.', error: true};
              }

              if (this.errors.length <= 0) {

                let formData = new FormData();
                formData.append('clientePuntos', JSON.stringify(this.clientePuntos));  
                
                fetch(`./api/index.php?action=postActualizaPuntos`, {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    return response.json();
                })
                .then(data => {
                    console.log('Puntos Actualizados', data);
                    this.getAllClientes();
                    this.clientePuntos = new ClientePuntos();
                    let flatpickr = $("#fechaPuntos").flatpickr();
                    flatpickr.clear();
                    alert(data.mensaje)
                }).catch(function(error) {
                    console.error(error);
                });  
              }
        
        },
        getUsuario() {
          fetch(`./api/index.php?action=getUsuarioBy&cedula=${this.clientePuntos.cedula}`)
          .then(response => {
              return response.json();
          })
          .then(usuario => {
            console.log(usuario.data);
             if (usuario.data) {
              this.errors.cedula = {message: `El usuario ${usuario.data.nombres} es correcto.`, error: false};
             }else{
              this.errors.cedula = {message: 'El usuario no existe en la base de datos', error: true};
             
             }
          }).catch( error => {
              console.error(error);
          }); 
          
          
        },
        calcularKilos() {
            this.clientePuntos.kilos = this.clientePuntos.valor / 1000
        }
    },
    mounted(){
        this.getAllClientes();
      }
})

