const names = { f: 'forward', b: 'backward', l: 'left', r: 'right', s: 'stop' };

// إرسال الاتجاه إلى save.php ليتم حفظه في قاعدة البيانات
function sendDirection(direction) {
    const data = new FormData();
    data.append('direction', direction);

    fetch('save.php', { method: 'POST', body: data })
        .then(response => response.text())
        .then(result => {
            const message = document.getElementById('message');
            message.textContent = result === 'ok'
                ? 'تم حفظ الاتجاه: ' + names[direction] + ' (' + direction + ')'
                : 'خطأ: ' + result;
        })
        .catch(() => alert('حدث خطأ أثناء الاتصال بالخادم'));
}
