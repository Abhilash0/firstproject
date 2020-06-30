Vue.component('register',{

	template:'#register',

	data(){

		return{

			password:'',

			confirmPassword:'',

			email:'',

			msg:[],

			disableSubmitButton: true,
		}		
	},

	watch:{

		email(value){

			this.eventName();

			this.email = value;

			this.check_email(value);
		},

		password(value){

			this.eventName();

			this.password = value;

			this.checkPassword(value);
		},

		confirmPassword(value){

			this.eventName();

			this.confirmPassword = value;

			this.checkconfirmPassword(value);
		}
	},

	methods:{

		changetotnc(){

			this.$emit('change','tnc');
		},

		check_email(value){

			if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value))
			{
				this.msg[name] = '';

			}else {

				this.msg[name] = 'Type correct email';
			}
		},

		checkPassword(value){
////if i want use it like this
			// remainingchars = 6 - value.length;

			// if(value.length < 6){

			// 	this.msg['password'] = 'Password must contain 6 characters '+ remainingchars + ' to go...';

			// } else{

			// 	this.msg['password'] = '';

			// }

			this.passwordLengthCheck(value);
		},

		checkconfirmPassword(value){

			if(this.passwordLengthCheck(value)){

			if ( value == this.password){

				this.msg[name] = '';

				this.disableSubmitButton = false;

			} else {

				this.msg[name] = 'Password Does Not Match';
			}
		}

		},

		passwordLengthCheck(passwordToCheck){


			remainingchars = 6 - passwordToCheck.length;

			if(passwordToCheck.length < 6){

				this.msg[name] = 'Password must contain 6 characters '+ remainingchars + ' to go...';

			} else{

				this.msg[name] = '';

				return true;

			}


		},

		eventName(){

			name = event.target.name;
		},

			submit(){

				alert('submitted');
			}
	}

});

Vue.component('tnc',{

	template:'#tnc',

	methods:{

		backtoregister(){

			this.$emit('change','register')
		}
	}


});

new Vue({

	el: '#app',

	data:{

		componentName: 'register'
	},

	methods:{

		change(newComp){

			this.componentName = newComp;
		}
	}

})