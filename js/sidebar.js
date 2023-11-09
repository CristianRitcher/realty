document.getElementById('openBtn').addEventListener('click', function() {
    const sidebar = document.querySelector('.sidebar');
    const content = document.querySelector('.content');
    if (sidebar.style.width === '320px') {
        sidebar.style.width = '0';
        content.style.marginLeft = '0';
    } else {
        sidebar.style.width = '320px';
        content.style.marginLeft = '320px';
    }
});

document.getElementById('closeBtn').addEventListener('click', function() {
    const sidebar = document.querySelector('.sidebar');
    const content = document.querySelector('.content');
    if (sidebar.style.width === '320px') {
        sidebar.style.width = '0';
        content.style.marginLeft = '0';
    } else {
        sidebar.style.width = '320px';
        content.style.marginLeft = '320px';
    }
});
