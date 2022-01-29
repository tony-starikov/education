const Main = {
    template: '' +
        '<section>' +
        '\n' +
        '<div class="container-fluid d-none d-xl-block d-xxl-block">\n' +
        '\n' +
        '    <div class="row" style="min-height: 100vh">\n' +
        '\n' +
        '        <div class="col-3 m-0" style="background-color: #efefef; padding-left: 4%; padding-right: 5%; min-height: 100vh;">\n' +
        '\n' +
        '            <img src="/images/logo.png" alt="logo" class="mb-5 p-0" style="min-width: 60%">\n' +
        '\n' +
        '            <h4 class="text-dark w-50">Інформаційна підтримка:</h4>\n' +
        '\n' +
        '            <div class="p-0 my-3">\n' +
        '                <a class="text-decoration-none text-dark p-0 m-0" href="tel:+380668901648">+380668901648</a>\n' +
        '            </div>\n' +
        '\n' +
        '            <div class="p-0 my-3">\n' +
        '                <a class="text-dark p-0 m-0" href="mailto:vv.vitaliy.work@gmail.com">vv.vitaliy.work@gmail.com</a>\n' +
        '            </div>\n' +
        '\n' +
        '            <div class="p-0 my-3">\n' +
        '                <h5 class="text-dark p-0 m-0">Віталій Виноградов</h5>\n' +
        '            </div>\n' +
        '\n' +
        '            <hr class="w-50 mb-5 rounded-pill" style="color: #1e1e1e; opacity: 1;height: 3px;">\n' +
        '\n' +
        '            <h3 class="mb-4">Наші соц. мережі</h3>\n' +
        '\n' +
        '            <div class="row mb-2">\n' +
        '                <div class="col-8">\n' +
        '                    <p class="my-2 p-0 fs-4 text-start">Facebook</p>\n' +
        '                </div>\n' +
        '                <div class="col-4">\n' +
        '                    <i class="fab fa-facebook fa-3x float-end"></i>\n' +
        '                </div>\n' +
        '            </div>\n' +
        '\n' +
        '            <div class="row mb-2">\n' +
        '                <div class="col-8">\n' +
        '                    <p class="my-2 p-0 fs-4 text-start">Skype</p>\n' +
        '                </div>\n' +
        '                <div class="col-4">\n' +
        '                    <i class="fab fa-skype fa-3x float-end"></i>\n' +
        '                </div>\n' +
        '            </div>\n' +
        '\n' +
        '            <div class="row mb-2">\n' +
        '                <div class="col-8">\n' +
        '                    <p class="my-2 p-0 fs-4 text-start">LinkedIn</p>\n' +
        '                </div>\n' +
        '                <div class="col-4">\n' +
        '                    <i class="fab fa-linkedin fa-3x float-end"></i>\n' +
        '                </div>\n' +
        '            </div>\n' +
        '\n' +
        '            <div class="row mb-2">\n' +
        '                <div class="col-8">\n' +
        '                    <p class="my-2 p-0 fs-4 text-start">Telegram</p>\n' +
        '                </div>\n' +
        '                <div class="col-4">\n' +
        '                    <i class="fab fa-telegram fa-3x float-end"></i>\n' +
        '                </div>\n' +
        '            </div>\n' +
        '\n' +
        '        </div>\n' +
        '\n' +
        '        <div class="col-8 px-5 m-0 elem overflow-auto" style="background-color: #1e1e1e; max-height: 100vh;">\n' +
        '\n' +
        '            <div class="row p-5" style="min-height: 45vh;">\n' +
        '\n' +
        '                <div class="col-6 text-end px-4 pt-4 h-100">\n' +
        '\n' +
        '                    <p class="p-0 m-0 ms-auto fs-5 w-50 lh-sm fw-lighter text-white">\n' +
        '                        Базовий курс з <b class="text-white">Autodesk Revit</b>, по завершенню якого Ви будете володіти усіма необхідними знаннями для впевненного старту як <b class="text-white">BIM спеціаліст.</b>\n' +
        '                    </p>\n' +
        '\n' +
        '                    <div class="row p-0 m-0">\n' +
        '\n' +
        '                        <div class="col text-end p-0 my-4">\n' +
        '\n' +
        '                            <router-link to="/course" class="m-0 p-0">\n' +
        '                                <div class="button1 d-inline-flex p-0 m-0">\n' +
        '                                </div>\n' +
        '                            </router-link>\n' +
        '\n' +
        '                        </div>\n' +
        '\n' +
        '                    </div>\n' +
        '\n' +
        '                </div>\n' +
        '\n' +
        '                <div class="col-6 text-start h-100">\n' +
        '\n' +
        '                    <img src="/images/struct1.png" alt="struct" class="img-fluid" style="width: 85%">\n' +
        '\n' +
        '                </div>\n' +
        '\n' +
        '            </div>\n' +
        '\n' +
        '            <hr size="5" class="p-0 m-0 mx-auto text-white rounded-pill" style="color: white; background-color: white; height: 3px; width: 65%; opacity: 1;">\n' +
        '\n' +
        '            <div class="row p-5" style="min-height: 45vh;">\n' +
        '\n' +
        '                <div class="col-6 text-end">\n' +
        '                    <img src="/images/monitor.png" alt="monitor" class="img-fluid" style="width: 85%">\n' +
        '                </div>\n' +
        '\n' +
        '                <div class="col-6 text-start px-4 pb-4 h-100 ">\n' +
        '\n' +
        '                    <div class="row p-0 m-0">\n' +
        '\n' +
        '                        <div class="col text-start p-0 my-4">\n' +
        '\n' +
        '                            <a target="_blank" href="https://www.youtube.com/" class="m-0 p-0">\n' +
        '                                <div class="button2 d-inline-flex p-0 m-0">\n' +
        '                                </div>\n' +
        '                            </a>\n' +
        '\n' +
        '                        </div>\n' +
        '\n' +
        '                    </div>\n' +
        '\n' +
        '                    <p class="p-0 m-0 me-auto fs-5 w-50 lh-sm fw-lighter text-white">\n' +
        '                        Наша <b class="text-white">безкоштовна відео-база</b> з матеріалами по Autodesk Revit та іншим програмам, яка буде корисною як для новачків, так і для ветеранів індустрії <b class="text-white">BIM моделювання.</b>\n' +
        '                    </p>\n' +
        '\n' +
        '                </div>\n' +
        '\n' +
        '            </div>\n' +
        '\n' +
        '            <div class="row p-0 m-0">\n' +
        '\n' +
        '                <div class="col text-center text-white p-0 m-0">\n' +
        '\n' +
        '                    <p class="text-white p-0 m-0">Let\'s BIMprove &copy; 2021</p>\n' +
        '\n' +
        '                </div>\n' +
        '\n' +
        '            </div>\n' +
        '\n' +
        '        </div>\n' +
        '\n' +
        '        <div class="col m-0" style="background-color: #00f3f3; min-height: 100vh;">\n' +
        '            \n' +
        '        </div>\n' +
        '\n' +
        '    </div>\n' +
        '\n' +
        '</div>' +




        '<div class="container-fluid d-none d-md-block d-lg-block d-xl-none">\n' +
            '\n' +
        '    <div class="row" style="background-color: #efefef;">\n' +
        '\n' +
        '        <div class="col-6 m-0 px-5">\n' +
        '\n' +
        '            <img src="logo.png" alt="logo" class="img-fluid w-75 mb-5 p-0">\n' +
        '\n' +
        '        </div>\n' +
        '\n' +
        '        <div class="col-6 m-0">\n' +
        '\n' +
        '            <h4 class="text-dark w-100 mt-3">Інформаційна підтримка:</h4>\n' +
        '\n' +
        '            <div class="p-0 my-3">\n' +
        '                <a class="text-decoration-none text-dark p-0 m-0" href="tel:+380668901648">+380668901648</a>\n' +
        '            </div>\n' +
        '\n' +
        '            <div class="p-0 my-3">\n' +
        '                <a class="text-dark p-0 m-0" href="mailto:vv.vitaliy.work@gmail.com">vv.vitaliy.work@gmail.com</a>\n' +
        '            </div>\n' +
        '\n' +
        '            <div class="p-0 my-3">\n' +
        '                <h5 class="text-dark p-0 m-0">Віталій Виноградов</h5>\n' +
        '            </div>\n' +
        '\n' +
        '            <hr class="w-50 my-3 rounded-pill" style="color: #1e1e1e; opacity: 1;height: 3px;">\n' +
        '\n' +
        '            <h3 class="mb-4">Наші соц. мережі</h3>\n' +
        '\n' +
        '            <div class="row mb-2 p-0">\n' +
        '                <div class="col-2 m-0 d-flex justify-content-start">\n' +
        '                    <i class="fab fa-facebook fa-3x float-end"></i>\n' +
        '                </div>\n' +
        '                <div class="col-2 m-0 d-flex justify-content-start">\n' +
        '                    <i class="fab fa-skype fa-3x float-end"></i>\n' +
        '                </div>\n' +
        '                <div class="col-2 m-0 d-flex justify-content-start">\n' +
        '                    <i class="fab fa-linkedin fa-3x float-end"></i>\n' +
        '                </div>\n' +
        '                <div class="col-2 m-0 d-flex justify-content-start">\n' +
        '                    <i class="fab fa-telegram fa-3x float-end"></i>\n' +
        '                </div>\n' +
        '            </div>\n' +
        '\n' +
        '        </div>' +
        '\n' +
        '    <div class="row m-0 p-0" style="background-color: #1e1e1e;">\n' +
        '\n' +
        '        <div class="col-12 px-0 m-0" style="background-color: #1e1e1e;">\n' +
        '\n' +
        '            <div class="row p-5" style="min-height: 45vh;">\n' +
        '\n' +
        '                <div class="col-6 text-end px-4 pt-4 h-100">\n' +
        '\n' +
        '                    <p class="p-0 m-0 ms-auto fs-5 w-75 lh-sm fw-lighter text-white">\n' +
        '                        Базовий курс з <b class="text-white">Autodesk Revit</b>, по завершенню якого Ви будете володіти усіма необхідними знаннями для впевненного старту як <b class="text-white">BIM спеціаліст.</b>\n' +
        '                    </p>\n' +
        '\n' +
        '                    <div class="row p-0 m-0">\n' +
        '\n' +
        '                        <div class="col text-end p-0 my-4">\n' +
        '\n' +
        '                            <router-link to="/course" class="m-0 p-0">\n' +
        '                                <div class="button1 d-inline-flex p-0 m-0">\n' +
        '                                </div>\n' +
        '                            </router-link>\n' +
        '\n' +
        '                        </div>\n' +
        '\n' +
        '                    </div>\n' +
        '\n' +
        '                </div>\n' +
        '\n' +
        '                <div class="col-6 text-start h-100">\n' +
        '\n' +
        '                    <img src="struct1.png" alt="struct" class="img-fluid" style="width: 85%">\n' +
        '\n' +
        '                </div>\n' +
        '\n' +
        '            </div>\n' +
        '\n' +
        '            <hr size="5" class="p-0 m-0 mx-auto text-white rounded-pill" style="color: white; background-color: white; height: 3px; width: 65%; opacity: 1;">\n' +
        '\n' +
        '            <div class="row p-5" style="min-height: 45vh;">\n' +
        '\n' +
        '                <div class="col-6 text-end">\n' +
        '                    <img src="monitor.png" alt="monitor" class="img-fluid" style="width: 85%">\n' +
        '                </div>\n' +
        '\n' +
        '                <div class="col-6 text-start px-4 pb-4 h-100 ">\n' +
        '\n' +
        '                    <div class="row p-0 m-0">\n' +
        '\n' +
        '                        <div class="col text-start p-0 my-4">\n' +
        '\n' +
        '                            <a target="_blank" href="https://www.youtube.com/" class="m-0 p-0">\n' +
        '                                <div class="button2 d-inline-flex p-0 m-0">\n' +
        '                                </div>\n' +
        '                            </a>\n' +
        '\n' +
        '                        </div>\n' +
        '\n' +
        '                    </div>\n' +
        '\n' +
        '                    <p class="p-0 m-0 me-auto fs-5 w-75 lh-sm fw-lighter text-white">\n' +
        '                        Наша <b class="text-white">безкоштовна відео-база</b> з матеріалами по Autodesk Revit та іншим програмам, яка буде корисною як для новачків, так і для ветеранів індустрії <b class="text-white">BIM моделювання.</b>\n' +
        '                    </p>\n' +
        '\n' +
        '                </div>\n' +
        '\n' +
        '            </div>\n' +
        '\n' +
        '    </div>\n' +
        '\n' +
        '            <div class="row p-0 m-0">\n' +
        '\n' +
        '                <div class="col text-center text-white p-0 m-0">\n' +
        '\n' +
        '                    <p class="text-white p-0 m-0">Let\'s BIMprove &copy; 2021</p>\n' +
        '\n' +
        '                </div>\n' +
        '\n' +
        '            </div>\n' +
        '\n' +
        '        </div>\n' +
        '\n' +
        '    </div>\n' +
        '\n' +
        '</div>' +
        '\n' +




        '<div class="container-fluid d-block d-sm-block d-md-none">\n' +
        '\n' +
        '    <div class="row" style="background-color: #efefef;">\n' +
        '\n' +
        '        <div class="col-12 m-0 px-5">\n' +
        '\n' +
        '            <img src="logo.png" alt="logo" class="img-fluid w-50 mb-5 p-0">\n' +
        '\n' +
        '        </div>\n' +
        '\n' +
        '        <div class="col-12 m-0 px-5">\n' +
        '\n' +
        '            <h4 class="text-dark w-100 mt-3">Інформаційна підтримка:</h4>\n' +
        '\n' +
        '            <div class="p-0 my-3">\n' +
        '                <a class="text-decoration-none text-dark p-0 m-0" href="tel:+380668901648">+380668901648</a>\n' +
        '            </div>\n' +
        '\n' +
        '            <div class="p-0 my-3">\n' +
        '                <a class="text-dark p-0 m-0" href="mailto:vv.vitaliy.work@gmail.com">vv.vitaliy.work@gmail.com</a>\n' +
        '            </div>\n' +
        '\n' +
        '            <div class="p-0 my-3">\n' +
        '                <h5 class="text-dark p-0 m-0">Віталій Виноградов</h5>\n' +
        '            </div>\n' +
        '\n' +
        '            <hr class="w-50 my-3 rounded-pill" style="color: #1e1e1e; opacity: 1;height: 3px;">\n' +
        '\n' +
        '            <h3 class="mb-4">Наші соц. мережі</h3>\n' +
        '\n' +
        '            <div class="row mb-2 p-0">\n' +
        '                <div class="col-2 m-0 d-flex justify-content-start">\n' +
        '                    <i class="fab fa-facebook fa-3x float-end"></i>\n' +
        '                </div>\n' +
        '                <div class="col-2 m-0 d-flex justify-content-start">\n' +
        '                    <i class="fab fa-skype fa-3x float-end"></i>\n' +
        '                </div>\n' +
        '                <div class="col-2 m-0 d-flex justify-content-start">\n' +
        '                    <i class="fab fa-linkedin fa-3x float-end"></i>\n' +
        '                </div>\n' +
        '                <div class="col-2 m-0 d-flex justify-content-start">\n' +
        '                    <i class="fab fa-telegram fa-3x float-end"></i>\n' +
        '                </div>\n' +
        '            </div>\n' +
        '\n' +
        '        </div>' +
        '\n' +
        '    <div class="row m-0 p-0" style="background-color: #1e1e1e;">\n' +
        '\n' +
        '        <div class="col-12 px-0 m-0" style="background-color: #1e1e1e;">\n' +
        '\n' +
        '            <div class="row p-5" style="min-height: 45vh;">\n' +
        '\n' +
        '                <div class="col-12 text-start h-100">\n' +
        '\n' +
        '                    <img src="struct1.png" alt="struct" class="img-fluid" style="width: 85%">\n' +
        '\n' +
        '                </div>\n' +
        '\n' +
        '                <div class="col-12 text-end px-4 pt-4 h-100">\n' +
        '\n' +
        '                    <p class="p-0 m-0 ms-auto fs-5 w-100 lh-sm fw-lighter text-white">\n' +
        '                        Базовий курс з <b class="text-white">Autodesk Revit</b>, по завершенню якого Ви будете володіти усіма необхідними знаннями для впевненного старту як <b class="text-white">BIM спеціаліст.</b>\n' +
        '                    </p>\n' +
        '\n' +
        '                    <div class="row p-0 m-0">\n' +
        '\n' +
        '                        <div class="col text-end p-0 my-4">\n' +
        '\n' +
        '                            <router-link to="/course" class="m-0 p-0">\n' +
        '                                <div class="button1 d-inline-flex p-0 m-0">\n' +
        '                                </div>\n' +
        '                            </router-link>\n' +
        '\n' +
        '                        </div>\n' +
        '\n' +
        '                    </div>\n' +
        '\n' +
        '                </div>\n' +
        '\n' +
        '            </div>\n' +
        '\n' +
        '            <hr size="5" class="p-0 m-0 mx-auto text-white rounded-pill" style="color: white; background-color: white; height: 3px; width: 65%; opacity: 1;">\n' +
        '\n' +
        '            <div class="row p-5" style="min-height: 45vh;">\n' +
        '\n' +
        '                <div class="col-12 text-end">\n' +
        '                    <img src="monitor.png" alt="monitor" class="img-fluid" style="width: 85%">\n' +
        '                </div>\n' +
        '\n' +
        '                <div class="col-12 text-start px-4 pb-4 h-100 ">\n' +
        '\n' +
        '                    <div class="row p-0 m-0">\n' +
        '\n' +
        '                        <div class="col text-start p-0 my-4">\n' +
        '\n' +
        '                            <a target="_blank" href="https://www.youtube.com/" class="m-0 p-0">\n' +
        '                                <div class="button2 d-inline-flex p-0 m-0">\n' +
        '                                </div>\n' +
        '                            </a>\n' +
        '\n' +
        '                        </div>\n' +
        '\n' +
        '                    </div>\n' +
        '\n' +
        '                    <p class="p-0 m-0 me-auto fs-5 w-100 lh-sm fw-lighter text-white">\n' +
        '                        Наша <b class="text-white">безкоштовна відео-база</b> з матеріалами по Autodesk Revit та іншим програмам, яка буде корисною як для новачків, так і для ветеранів індустрії <b class="text-white">BIM моделювання.</b>\n' +
        '                    </p>\n' +
        '\n' +
        '                </div>\n' +
        '\n' +
        '            </div>\n' +
        '\n' +
        '    </div>\n' +
        '\n' +
        '            <div class="row p-0 m-0">\n' +
        '\n' +
        '                <div class="col text-center text-white p-0 m-0">\n' +
        '\n' +
        '                    <p class="text-white p-0 m-0">Let\'s BIMprove &copy; 2021</p>\n' +
        '\n' +
        '                </div>\n' +
        '\n' +
        '            </div>\n' +
        '\n' +
        '        </div>\n' +
        '\n' +
        '    </div>\n' +
        '\n' +
        '</div>' +

        '\n' +

        '</section>'
}
