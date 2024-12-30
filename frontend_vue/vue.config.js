const { defineConfig } = require('@vue/cli-service');
module.exports = defineConfig({
  transpileDependencies: true,
  devServer: {
    host: '0.0.0.0', // Bind to all network interfaces
    port: 8082,      // Match the Docker port mapping (if using 8082)
  },
});
