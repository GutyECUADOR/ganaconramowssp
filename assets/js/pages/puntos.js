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
      errors: [],
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
            
            if (this.clientePuntos.puntoVenta && 
                this.clientePuntos.nombre && 
                this.clientePuntos.cedula && 
                this.clientePuntos.fecha && 
                this.clientePuntos.valor && 
                this.clientePuntos.kilos) {

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
        
        },
        calcularKilos() {
            this.clientePuntos.kilos = this.clientePuntos.valor / 1000
        }
    },
    mounted(){
        this.getAllClientes();
      }
})

