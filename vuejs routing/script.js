const one = {

	template: `<div class='text-center'>
		<h1>This Is One</h1>
		<img class='img-fluid' src="images/photo.jpg">
	</div>`

	}

const two = {

	
	template: `<div class='text-center'>
		<h1>This Is Two</h1>
		<img class='img-fluid' src="images/phot.JPEG">
	</div>`
}

const three = {

	
	template: `<div class='text-center'>
		<h1>This Is Three</h1>
		<img class='img-fluid' src="images/pho.JPEG">
	</div>`
}



const router = new VueRouter({

	routes: [
		{
			path: '/one',
			component: one
		},

		{
			path: '/two',
			component: two
		},

		{
			path: '/three',
			component: three
		}
	]
})





var routeTest = new Vue({

	router,
	el:'#app',
	data: {


	},
	methods:{

	}
}).$mount('#app')