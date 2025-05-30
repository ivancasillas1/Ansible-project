const { chromium } = require('playwright');
const fs = require('fs');

(async () => {
  const browser = await chromium.launch();
  const page = await browser.newPage();

  const start = Date.now();
  try {
    await page.goto('http://172.26.203.191');
    await page.waitForTimeout(1000);
    console.log('Acceso exitoso');
  } catch (error) {
    console.error('Error en el acceso:', error);
  }
  const duration = Date.now() - start;
  console.log(`Tiempo de carga: ${duration} ms`);
  fs.appendFileSync('metrics.log', `access_duration_ms ${duration}\n`);
  await browser.close();
})();
