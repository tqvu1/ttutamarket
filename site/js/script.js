

var tl = new TimelineLite()

/* �ʱ� ���İ� 0 */

tl.to(".b01_txt01", 0, { alpha: 0, x: -100, ease: Sine.easeInOut});
tl.to(".b01_txt02", 0, { alpha: 0, x: 20,  ease: Sine.easeInOut});
tl.to(".b01_txt03", 0, { alpha: 0, x: -100,  ease: Sine.easeInOut});
// ��ư
tl.to(".b01_btn01", 0, { alpha: 0, ease: Sine.easeInOut});
tl.to(".b01_btn02", 0, { alpha: 0, ease: Sine.easeInOut});
// �Ϸ���Ʈ
tl.to(".b01_people", 0, { alpha: 0, y: 0, ease: Sine.easeInOut});
// �ڵ���
tl.to(".b01_phone", 0, { alpha: 0, y: -100, ease: Sine.easeInOut});


/* ȣ��Ż�� txt */

tl.to(".b01_txt01", 0.6, { alpha: 1, x: 0, ease: Sine.easeInOut});

/* ���ٸ��� txt */
tl.to(".b01_txt02", 0.6, { alpha: 1, delay: -0.6, x: 0, ease: Sine.easeInOut});

/* �ǽð� ���� txt */
tl.to(".b01_txt03", 0.6, { alpha: 1, delay: -0.4, x: 0, ease: Sine.easeInOut});

/* ���� ��ư */
tl.to(".b01_btn01", 1, { alpha: 0, delay: -4, scale: 0});
tl.to(".b01_btn01", 1, { alpha: 1, scale: 1, ease: Bounce.easeOut});

/* ios ��ư */
tl.to(".b01_btn02", 1, { alpha: 0, delay: -2, scale: 0});
tl.to(".b01_btn02", 1, { alpha: 1, delay: -0.7, scale: 1, ease: Bounce.easeOut});

/* �Ϸ���� */
tl.to(".b01_people", 1, { alpha: 1, delay: -1, y: 0, ease: Sine.easeInOut});

/* �ڵ��� */
tl.to(".b01_phone", 1, { alpha: 1, delay: -0.4,  y: 0, ease: Bounce.easeOut});
