from django.db import models


class Cities(models.Model):
    city = models.CharField(max_length=30)
    raincount = models.CharField(max_length=30)
    sunhours = models.CharField(max_length=30)
    sickness = models.CharField(max_length=30)
    description = models.TextField()
	def __unicode__ (self):
		return self.name
