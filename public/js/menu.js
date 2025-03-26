const isMobile = {
	Android: function () {
		return navigator.userAgent.match(/Android/i);
	},
	BlankBerry: function () {
		return navigator.userAgent.match(/BlankBerry/i);
	},
	iOS: function () {
		return navigator.userAgent.match(/iOS/i);
	},
	Opera: function () {
		return navigator.userAgent.match(/Opera/i);
	},
	Windows: function () {
		return navigator.userAgent.match(/Windows/i);
	},
	any: function () {
		return (
			isMobile.Android() ||
			isMobile.BlankBerry() ||
			isMobile.iOS() ||
			isMobile.Opera() ||
			isMobile.Windows());
	}
};

if (isMobile.any()) {
	document.body.classList.add('_touch');

	let menuArrows = document.querySelectorAll('.menu_arrow');
	if (menuArrows.length > 0) {
		for (let index = 0; index < menuArrows.length; index++) {
			const menuArrow = menuArrows[index];
			menuArrow.addEventListener("click", function (e) {
				menuArrow.parentElement.classList.toggle('_active');
			});
		}
	}
} else {
	document.body.classList.add('_pc');
}


// Бургер меню
const iconMenu = document.querySelector('.menu_icon');
if (iconMenu) {
	const menuBody = document.querySelector('.menu_body');
	iconMenu.addEventListener("click", function (e) {
		document.body.classList.toggle('_lock');
		iconMenu.classList.toggle('_active');
		menuBody.classList.toggle('_active');
	});
}

// Прокрутка при клике на страницу главная
// const menuLinks = document.querySelectorAll('.menu_sub_link[data-goto]');
// console.log(menuLinks)

// if (menuLinks.length > 0) {
// 	console.log(menuLinks)
// 	menuLinks.forEach(menuLinks => {
// 		menuLinks.addEventListener("click", onMenuLinkClick);
// 	});

// 	function onMenuLinkClick(e) {
// 		const menuLinks = e.target;
// 		console.log(menuLinks.dataset.goto)
// 		console.log(document.querySelector(menuLinks.dataset.goto))
// 		if (menuLinks.dataset.goto && document.querySelector(menuLinks.dataset.goto)) {
// 			const gotoBlock = document.querySelector(menuLinks.dataset.goto);
// 			const gotoBlockValue = gotoBlock.getBoundingClientRect().top + pageYOffset - document.querySelector('.big-text-about').offsetHeight; // - document.querySelector('header').offsetHeight;

// 			window.scrollTo({
// 				top: gotoBlockValue,
// 				behavior: "smooth"
// 			});
// 			e.preventDefault();
// 		}
// 	}
// }

























// const hamb = document.querySelector("#hamb");
// const popup = document.querySelector("#popup");
// const body = document.body;

// Клонируем меню, чтобы задать свои стили для мобильной версии
// const menu = document.querySelector("#menu").cloneNode(1);

// При клике на иконку hamb вызываем ф-ию hambHandler
// hamb.addEventListener("click", hambHandler);

// Выполняем действия при клике ..
// function hambHandler(e) {
//   e.preventDefault();
// Переключаем стили элементов при клике
//   popup.classList.toggle("open");
//   hamb.classList.toggle("active");
//   body.classList.toggle("noscroll");
//   renderPopup();
// }

// Здесь мы рендерим элементы в наш попап
// function renderPopup() {
//   popup.appendChild(menu);
// }

// Код для закрытия меню при нажатии на ссылку
//const links = Array.from(menu.children);

// Для каждого элемента меню при клике вызываем ф-ию
// links.forEach((link) => {
//   link.addEventListener("click", closeOnClick);
// });

// Закрытие попапа при клике на меню
// function closeOnClick() {
//   popup.classList.remove("open");
//   hamb.classList.remove("active");
//   body.classList.remove("noscroll");
// }






$(function () {
	var fx = {
		"initModal": function () {
			if ($(".modal-window").length == 0) {
				$("<div>").addClass("averLay").appendTo("body");
				return $('<div>').addClass("modal-window").appendTo("body");
			} else {
				return $(".modal-window")
			}
		}
	}

	$("#button-form").click(function () {
		var modal = fx.initModal();
		modal.load("/aburo/media/pages/form.html");
	});

	// $("#submit-form-basket").click(function(e){
	// 	var modal = fx.initModal();
	// 	modal.load("../html/order_complete.html");	
	// 	e.preventDefault();
	// });

	$("#button-form-1").click(function () {
		var modal = fx.initModal();
		modal.load("/aburo/media/pages/form.html");
	});

	$("#button-form-about").click(function () {
		var modal = fx.initModal();
		modal.load("/aburo/media/pages/form.html");
	});
	// $("#button-form-about").click(function(){
	// var modal = fx.initModal();
	// modal.load("/media/pages/form_about.html");
	// });

	$("#content_1_new_p1").click(function () {
		var modal = fx.initModal();
		modal.load("/aburo/media/pages/modal_window_new.html");
	});

	$("#content_1_new_p1_2").click(function () {
		var modal = fx.initModal();
		modal.load("/aburo/media/pages/m_w_new_2.html");
	});

	$("#content_1_new_p1_3").click(function () {
		var modal = fx.initModal();
		modal.load("/aburo/media/pages/m_w_new_3.html");
	});

	$("#content_1_new_p1_4").click(function () {
		var modal = fx.initModal();
		modal.load("/aburo/media/pages/m_w_new_4.html");
	});

	// $("#img_basket_window").click(function(){
	// 	var modal = fx.initModal();
	// 	modal.load("/aburo/media/pages/");
	// });

	$("#content_1_new_p1_5").click(function () {
		var modal = fx.initModal();
		modal.load("/aburo/media/pages/m_w_new_5.html");
	});

	$("#content_1_new_p1_6").click(function () {
		var modal = fx.initModal();
		modal.load("/aburo/media/pages/m_w_new_6.html");
	});
});
