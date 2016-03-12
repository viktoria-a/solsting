from django.db import models


class Cities(models.Model):
    city = models.CharField(max_length=30)
    raincount = models.FloatField(max_length=30)
    sunhours = models.FloatField(max_length=30)
    sickness = models.FloatField(max_length=30)
    description = models.TextField()
	def __unicode__ (self):
		return self.name
