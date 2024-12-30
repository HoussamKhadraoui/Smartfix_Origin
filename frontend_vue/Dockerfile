# Use official Node.js image as the base
FROM node:16

# Set working directory
WORKDIR /app

# Copy package.json and package-lock.json
COPY package*.json ./

# Install Node.js dependencies
RUN npm install

# Copy all frontend code
COPY . .

# Build the Vue.js app for production
RUN npm run build

# Expose port 8080 for the Vue.js app
EXPOSE 8080

# Serve the app in development mode
CMD ["npm", "run", "serve"]
