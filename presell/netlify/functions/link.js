exports.handler = async function (event, context) {
  // Coloque aqui o link de destino
  var destino = 'https://SEU-LINK-AQUI.com';

  return {
    statusCode: 200,
    headers: {
      'Content-Type': 'application/json',
      'Cache-Control': 'no-store',
    },
    body: JSON.stringify({ u: destino }),
  };
};
