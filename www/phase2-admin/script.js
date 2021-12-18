function showEmpInfo_AdminPage(){
	window.addEventListener('load', () => {
		const line = document.querySelector('.line');
		const items = document.querySelectorAll('.category__item');
		const linkStr = '.category__link';
		items.forEach((item) => {
			const link = item.querySelector(linkStr);
			if (line.offsetTop === item.offsetTop) {
				link.style = 'background-color: #a99eda; color: white;';
			} else {
				link.style = '';
			}
			item.addEventListener('click', (e) => {
				line.style.top = e.target.offsetTop + 'px';
				[...items].forEach((item) => {
					const link = item.querySelector(linkStr);
					if (link.style) {
						link.style = '';
					}
				});
				e.target.querySelector(linkStr).style = 'background-color: #a99eda; color: white;';
			});
		});
		const aboutList = document.querySelector('.about__list');
		const aboutItems = aboutList.querySelectorAll('.about__item');
        
		[...aboutItems].forEach(function (item) {
			const template = `<div class="modal">
			<div class="modal__content">
				<i class="fa fa-times modal__close"></i>
				<h2 class="modal__title">Information Employee</h2>
				<div class="modal__main">
					<img src="https://source.unsplash.com/random" alt="" />
					<div class="modal__info">
						<div class="modal__more">Full name: <span>Cynthina Adam</span></div>
						<div class="modal__more">User name: <span>Cynthina</span></div>
						<div class="modal__more">Gender: <span>Female</span></div>
						<div class="modal__more">Age: <span>18</span></div>
						<div class="modal__more">Department: <span>A block</span></div>
						<div class="modal__more">Role: <span>Employee</span></div>
						<div class="modal__more">Email: <span>Cyn@gmail.com</span></div>
						<div class="modal__more">Phone number: <span>123456789</span></div>
						<div class="modal__more">Address: <span>123</span></div>
					</div>
				</div>
			</div>
		</div>`;
			item.addEventListener('click', (e) => {
				document.body.insertAdjacentHTML('beforeend', template);
				document.body.querySelector('.modal').classList.add('show');
			});
		});
		document.body.addEventListener('click', (e) => {
			if (e.target.matches('.modal__close')) {
				const modal = e.target.parentNode.parentNode;
				modal.parentNode.removeChild(modal);
			} else if (e.target.matches('.modal')) {
				e.target.parentNode.removeChild(e.target);
			}
		});
	});
	
}

showEmpInfo_AdminPage()