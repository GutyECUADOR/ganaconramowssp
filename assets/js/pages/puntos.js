class ClientePuntos {
    constructor() {
        this.puntoVenta = '';
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
      clientes: [],
      puntosVenta : [],
      clientePuntos: new ClientePuntos()
    },
    methods:{
        init(){
            fetch(`./api/index.php?action=getInfoInitForm`)
                .then( response => {
                return response.json();
                })
                .then( result => {
                console.log('InitForm', result.data);
                this.puntosVenta = result.data.puntosVenta; 
               
            }).catch( error => {
                console.error(error);
            });  
        },
        getAllClientes(){
          
            fetch(`./api/index.php?action=getAllClientes`)
            .then(response => {
                return response.json();
            })
            .then(data => {
                console.log('Clientes', data);
                this.clientes = data.data;  
            }).catch(function(error) {
                console.error(error);
            });  
        },
        actualizarPuntos(){
            console.log(this.clientePuntos);
            if (!this.clientePuntos.puntoVenta || !this.clientePuntos.cedula || !this.clientePuntos.fecha || !this.clientePuntos.valor || !this.clientePuntos.kilos ) {
                alert('Complete los datos de registro para agregar Kilos.');
                return
            }

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

           
            
            
        },
        calcularKilos() {
            this.clientePuntos.kilos = this.clientePuntos.valor / 1000
        }
    },
    mounted(){
        this.init();
        this.getAllClientes();
      }
  })
