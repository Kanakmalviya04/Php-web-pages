#include<stdio.h>
#include<conio.h>
void main()
{
int n,i,temp;
printf("enter any number");
scanf("%d",&n);
for(i=1;i<=n;i++)
{
temp=i*2;
printf("%d\t",temp);
}
getch();
}
