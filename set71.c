#include<stdio.h>
#include<string.h>
int main()
{
    char a[60];
    int n,i;
    gets(a);
    scanf("%d",&n);
    for(i=0;i<n;i++)
    {
        printf("%c",a[i]);
    }
    return 0;
}
