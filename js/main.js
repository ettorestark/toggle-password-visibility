(function(window, document) {
	function togglePassword() {
		var x = document.getElementById('password');
		if(x.type == 'text') {
			x.type = 'password';
			this.classList.remove('fa-eye-slash');
			this.classList.add('fa-eye');
		}else {
			x.type = 'text';
			this.classList.remove('fa-eye');
			this.classList.add('fa-eye-slash');
		}
	}
	document.getElementById('togglePassword').addEventListener('click', togglePassword);
})(window, document);