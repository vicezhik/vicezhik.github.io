<?
include $_SERVER['DOCUMENT_ROOT'].'/include/head.php';
?>
<div class="profile bg-gray">
    <div class="wrapper">
        <ul class="breadcrumbs">
            <li><a href=""><span class="icon-home"></span>Главная</a></li>
            <li><a href="">Личный кабинет</a></li>
            <li><span>Добавить профиль</span></li>
        </ul>
        <h1>Добавить профиль</h1>
        <div class="profile-step">
            <div class="pf__type">
            <div class="pf__type-item">
                <div class="pf__type-lvl">Статус</div>
                <div class="pf__type-value pf__form">
                    <div class="pf__form-radio">
                        <div class="pf__form-r form_radio">
                            <input type="radio" id="ooo" value="ooo" name="status">
                            <label for="ooo">Юридическое лицо</label>
                        </div>
                        <div class="pf__form-r form_radio">
                            <input type="radio" id="ip" value="ip"  name="status" checked>
                            <label for="ip">Индивидуальный предприниматель</label>
                        </div>
                        <div class="pf__form-r form_radio" >
                            <input type="radio" id="fiz" value="fiz"   name="status">
                            <label for="fiz">Физическое лицо</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pf__type-item">
                <div class="pf__type-lvl">Тип профиля</div>
                <div class="pf__type-value pf__form">
                    <div class="pf__form-radio">
                        <div class="pf__form-r form_radio">
                            <input type="radio" id="seller" value="seller"  name="type">
                            <label for="seller">Продавец</label>
                        </div>
                        <div class="pf__form-r form_radio">
                            <input type="radio" id="buyer" value="buyer" checked name="type">
                            <label for="buyer">Покупатель</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pf__progress">
            <div class="pf__progress-step active"><span>1</span></div>
            <div class="pf__progress-line"></div>
            <div class="pf__progress-step"><span>2</span></div>
            <div class="pf__progress-line"></div>
            <div class="pf__progress-step"><span>3</span></div>
            <div class="pf__progress-line"></div>
            <div class="pf__progress-step"><span>4</span></div>
        </div>
        <div class="pf__data-box">
            <div class="pf__data-title">
                <span class="icon-ip"></span>
                <span class="text-desctop">Данные индивидуального предринимателя</span> 
                <span class="text-mobile">Данные ИП</span> 
            </div>
            <div class="pf__form">
                <div class="pf__form-photo pf__ip-photo">
                    <label>
                        <div class="pf__form-preview"></div>
                        <span class="icon-photo"></span>
                        <input type="file">
                    </label>
                </div>
                <div class="pf__form-item pf__ip-name">
					<div class="pf__form-lvl">Индивидуальный предприниматель</div>
					<div class="pf__form-value">
						    <input type="text" placeholder="Введите имя предпринимателя ..." value="">
                        </div>
				</div>
                <div class="pf__form-item pf__ip-torg">
					<div class="pf__form-lvl">Торговое наименование</div>
					<div class="pf__form-value">
						    <input type="text" placeholder="Введите наименование ..." value="">
                        </div>
				</div>
                <div class="pf__form-item pf__ip-ogrn">
					<div class="pf__form-lvl">ОГРН</div>
					<div class="pf__form-value">
						    <input type="text" placeholder="Введите 13 цифр ОГРН ..." value="">
                        </div>
				</div>
                <div class="pf__form-item pf__ip-inn">
					<div class="pf__form-lvl">ИНН</div>
					<div class="pf__form-value">
						    <input type="text" placeholder="Введите 10 цифр ИНН ..." value="">
                        </div>
				</div>
                <div class="pf__form-item pf__ip-nalog">
					<div class="pf__form-lvl">Тип налогобложения</div>
					<div class="pf__form-value">
                        <select name="" id="">
                            <option value="">УСН</option>
                            <option value="">ОСН</option>
                        </select>
					</div>
				</div>
               

            </div>
            <div class="pf__data-title">
                <span class="icon-book"></span>
                Контакты организации 
            </div>
            <div class="pf__form">
                <div class="pf__form-item pf__ip-phone">
					<div class="pf__form-lvl">Телефон</div>
					<div class="pf__form-value">
						    <input type="text" placeholder="+ 7 (       )" value="">
                        </div>
				</div>
                <div class="pf__form-item pf__ip-email">
					<div class="pf__form-lvl">E-mail</div>
					<div class="pf__form-value">
						    <input type="text" placeholder="Введите электронный адрес ..." value="">
                        </div>
				</div>
                <div class="pf__form-item pf__ip-site">
					<div class="pf__form-lvl">Сайт</div>
					<div class="pf__form-value">
						    <input type="text" placeholder="http://" value="">
                        </div>
				</div>
            </div>
        </div>
        <div class="pf__data-bt">
            <button class="btn btn-transparent icon-save save-draft">Сохранить как черновик</button>
            <button class="btn btn-green">Следующий шаг</button>
        </div>
        </div>
        
    </div>
</div>
<?
include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
?>