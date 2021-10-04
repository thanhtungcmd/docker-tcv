{{/* PHP */}}
{{- define "php.labels" -}}
app: php
{{- end -}}

{{- define "php.matchLabels" -}}
app: php
{{- end -}}
{{/* END PHP */}}

{{/* NGINX */}}
{{- define "nginx.labels" -}}
app: nginx
{{- end -}}

{{- define "nginx.matchLabels" -}}
app: nginx
{{- end -}}
{{/* END NGINX */}}

{{/* MYSQL */}}
{{- define "mysql.labels" -}}
app: mysql
{{- end -}}

{{- define "mysql.matchLabels" -}}
app: mysql
{{- end -}}
{{/* END MYSQL */}}

{{/* MONGODB */}}
{{- define "mongodb.labels" -}}
app: mongodb
{{- end -}}

{{- define "mongodb.matchLabels" -}}
app: mongodb
{{- end -}}
{{/* END MONGODB: */}}