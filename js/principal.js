
let app = new Vue({
	el: '#app',
	data: {
		//mensaje: 'Hola vuejs'
		lista: [
			/*{
				nombre: 'Juan',
				promedio: '10',
				estado: false
			},
			{
				nombre: 'mario',
				promedio: '30',
				estado: true
			},
			{
				nombre: 'pedro',
				promedio: '20',
				estado: true
			},*/
		],
		nombre: '',
		promedio: ''
	},
	methods: {
		agregarNota:  function () {
			let estadoa = false;
			this.promedio >= 12.5 ? true : false; 
			/*if(this.promedio >= 12.5){
				estadoa = true;
			}*/
			if(this.nombre  !== "" && this.promedio !== ''){
				this.lista.push({nombre:this.nombre, promedio: this.promedio, estado: estadoa});
				this.nombre = '';
				this.promedio = '';
			}else{
				Swal.fire(
	              '¡Datos imcompletos!',
	              'Agregar nombre y/o promedio',
	              'error'
	            );
			}
		}
	}
});
