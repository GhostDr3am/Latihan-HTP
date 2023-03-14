for (let i = 2; i <= 30; i++) {
  for (let j = 2; j < i; j++) {
    if (i == j + 1) {
      console.log(i + ' adalah bilangan prima');
    } else if (i % j == 0) {
      break;
    }
  }
}

// Bilangan prima versi 2


for (i = 1; i <= 50; i++) {
  let prin = 0;
  for (j = 1; j <= i; j++) {
    if (i % j == 0) {
      prin++;
    }
  }
  if (prin == 2) {
    console.log('bilangan prima ' + i);
  }
}