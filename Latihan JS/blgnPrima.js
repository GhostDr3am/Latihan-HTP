for (let i = 2; i <= 10; i++) {
  for (let j = 2; j < i; j++) {
    if (i == j + 1) {
      console.log(i + ' adalah bilangan prima');
    } else if (i % j == 0) {
      break;
    }
  }
}
