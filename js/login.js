function getVisibleLoginElements() {
    // Find the visible login form container
    const loginContainers = document.querySelectorAll('#login-content');
    let visibleContainer = null;
    
    for (let container of loginContainers) {
        const style = window.getComputedStyle(container.closest('#main, #main-2'));
        if (style.display !== 'none') {
            visibleContainer = container;
            break;
        }
    }
    
    if (!visibleContainer) {
        visibleContainer = document.querySelector('#login-content');
    }
    
    return {
        loginForm: visibleContainer.querySelector('#login-form'),
        registerForm: visibleContainer.querySelector('#register-form'),
        loginTab: visibleContainer.querySelector('#login-tab'),
        registerTab: visibleContainer.querySelector('#register-tab')
    };
}

function showLoginForm() {
    const elements = getVisibleLoginElements();
    if (elements.loginForm) elements.loginForm.style.display = 'block';
    if (elements.registerForm) elements.registerForm.style.display = 'none';
    if (elements.loginTab) elements.loginTab.classList.add('active');
    if (elements.registerTab) elements.registerTab.classList.remove('active');
}

function showRegisterForm() {
    const elements = getVisibleLoginElements();
    if (elements.loginForm) elements.loginForm.style.display = 'none';
    if (elements.registerForm) elements.registerForm.style.display = 'block';
    if (elements.registerTab) elements.registerTab.classList.add('active');
    if (elements.loginTab) elements.loginTab.classList.remove('active');
}