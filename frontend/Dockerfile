# --- Build de la SPA ---
FROM node:18 AS build
WORKDIR /app
COPY package*.json ./
# Si hay package-lock.json usa npm ci, si no npm install
RUN if [ -f package-lock.json ]; then npm ci; else npm install; fi
COPY . .
RUN npm run build   # genera /dist

# --- Nginx para servir estáticos ---
FROM nginx:alpine
# Config con fallback a /index.html (React Router)
COPY nginx.conf /etc/nginx/conf.d/default.conf
COPY --from=build /app/dist /usr/share/nginx/html
