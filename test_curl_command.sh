#!/bin/bash
curl -X POST http://127.0.0.1:8000/api/motivational-message \
-H "Content-Type: application/json" \
-H "Authorization: Bearer YOUR_DEEPSEEK_API_KEY" \
-d '{"model": "deepseek-motivational", "messages": [{"role": "user", "content": "Give me a motivational message"}]}'
